import { Camera } from "@capacitor/camera";
import { Capacitor } from "@capacitor/core"; // To check platform
import { Html5QrcodeScanner } from "html5-qrcode";
import { useEffect, useRef, useState } from "react";
import "./qrscanner.css";

const SCAN_COOLDOWN_MS = 2000;

const QRScanner = (props) => {
    const scannerRef = useRef(null);
    const isMounted = useRef(true);
    const [hasPermission, setHasPermission] = useState(false);
    const qrcodeRegionId = "html5qr-code-full-region";

    const [scanningAllowed, setScanningAllowed] = useState(true);

    const createConfig = (props) => {
        return {
            fps: props.fps || 10,
            qrbox: props.qrbox || 250,
            aspectRatio: props.aspectRatio || undefined,
            disableFlip: props.disableFlip || false,
        };
    };

    // Separate logic for checking mobile camera permissions
    const checkMobileCameraPermission = async () => {
        const permissionStatus = await Camera.requestPermissions();
        if (permissionStatus.camera === "granted") {
            setHasPermission(true);
        } else {
            console.error("Camera permission denied");
        }
    };

    // Logic for desktop (browser) permissions
    const checkBrowserCameraPermission = async () => {
        // For desktop browsers, no permission needed since the browser handles it
        setHasPermission(true);
    };

    const checkCameraPermission = async () => {
        if (Capacitor.isNativePlatform()) {
            // For mobile platforms (Android / iOS)
            await checkMobileCameraPermission();
        } else {
            // For desktop browsers
            await checkBrowserCameraPermission();
        }
    };

    useEffect(() => {
        console.log("INIT");
        const startScanning = async () => {
            const config = createConfig(props);
            const verbose = props.verbose === true;

            if (!props.qrCodeSuccessCallback) {
                throw new Error("qrCodeSuccessCallback is a required callback.");
            }

            // Only create new scanner if one doesn't exist
            if (!scannerRef.current) {
                const html5QrcodeScanner = new Html5QrcodeScanner(qrcodeRegionId, config, verbose);
                console.log("Starting html5QrcodeScanner...");
                await html5QrcodeScanner.render((decodedText, decodedResult) => {
                    if (!scanningAllowed) return;

                    setScanningAllowed(false);
                    props.qrCodeSuccessCallback(decodedText, decodedResult);

                    setTimeout(() => {
                        setScanningAllowed(true);
                    }, SCAN_COOLDOWN_MS);
                }, props.qrCodeErrorCallback);
                return html5QrcodeScanner;
            }
            return scannerRef.current;
        };

        const initScanner = async () => {
            if (isMounted.current && !scannerRef.current) {
                scannerRef.current = await startScanning();
            }
        };

        checkCameraPermission();
        initScanner();

        return () => {
            isMounted.current = false;
            const clearScanner = async () => {
                try {
                    if (scannerRef.current) {
                        await scannerRef.current.clear();
                        scannerRef.current = null;
                    }
                } catch (error) {
                    console.error("Failed to clear html5QrcodeScanner:", error);
                }
            };
            console.log("Clearing");
            clearScanner();
        };
    }, []); // Remove props dependency to prevent re-renders

    return (
        <div className="flex justify-center items-center">
            <div id={qrcodeRegionId} />
        </div>
    );
};

QRScanner.propTypes;

export default QRScanner;
