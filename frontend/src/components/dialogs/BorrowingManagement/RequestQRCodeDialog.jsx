import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Toaster } from "@/components/ui/sonner";
import { Capacitor } from "@capacitor/core";
import { Directory, Encoding, Filesystem } from "@capacitor/filesystem";
import PropTypes from "prop-types";
import { QRCodeSVG } from "qrcode.react";
import { useRef } from "react";
import { toast } from "sonner";

export const RequestQRCodeDialog = ({ isOpen, onClose, requestId }) => {
    const svgRef = useRef(null);

    const downloadQRCode = async () => {
        const svg = svgRef.current?.querySelector("svg");
        if (!svg) {
            toast.error("QR code not found.");
            return;
        }

        const canvas = document.createElement("canvas");
        const svgData = new XMLSerializer().serializeToString(svg);
        const svgBlob = new Blob([svgData], { type: "image/svg+xml;charset=utf-8" });
        const url = URL.createObjectURL(svgBlob);

        const img = new Image();
        img.onload = async () => {
            canvas.width = img.width;
            canvas.height = img.height;
            const ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0);
            URL.revokeObjectURL(url);

            const pngDataUrl = canvas.toDataURL("image/png");
            const base64Data = pngDataUrl.split(",")[1];
            const filename = `qr-request-${requestId}.png`;

            if (Capacitor.getPlatform() === "web") {
                const downloadLink = document.createElement("a");
                downloadLink.href = pngDataUrl;
                downloadLink.download = filename;
                document.body.appendChild(downloadLink);
                downloadLink.click();
                document.body.removeChild(downloadLink);
                toast.success("QR code downloaded.");
            } else {
                try {
                    const permStatus = await Filesystem.checkPermissions();
                    if (permStatus.publicStorage !== "granted") {
                        const result = await Filesystem.requestPermissions();
                        if (result.publicStorage !== "granted") {
                            toast.error("Storage permission not granted.");
                            return;
                        }
                    }

                    await Filesystem.writeFile({
                        path: `Pictures/${filename}`,
                        data: base64Data,
                        directory: Directory.External,
                        encoding: Encoding.BASE64,
                    });

                    toast.success("QR code saved to gallery.");
                } catch (error) {
                    console.error("Filesystem write error:", error);
                    toast.error("Failed to save QR code.");
                }
            }
        };

        img.src = url;
    };

    return (
        <>
            <Toaster richColors position="top-center" expand={true} />
            <Dialog open={isOpen} onOpenChange={onClose}>
                <DialogContent width="max-w-[fit-content]">
                    <DialogHeader>
                        <DialogTitle>Generated QR Code</DialogTitle>
                    </DialogHeader>

                    <div className="w-full flex justify-center" ref={svgRef}>
                        <QRCodeSVG value={`${requestId}`} size={300} marginSize={1} level="L" />
                    </div>

                    <DialogFooter>
                        <Button onClick={downloadQRCode}>Download QR Code</Button>
                    </DialogFooter>
                </DialogContent>
            </Dialog>
        </>
    );
};

// ✅ Optional: define expected props
RequestQRCodeDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    requestId: PropTypes.oneOfType([PropTypes.string, PropTypes.number]).isRequired,
};

export default RequestQRCodeDialog;
