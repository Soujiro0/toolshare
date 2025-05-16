import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Toaster } from "@/components/ui/sonner";
import QRScanner from "@/lib/Scanner/Scanner";
import { useCallback, useMemo, useRef } from "react";
import { toast } from "sonner";

const SCAN_COOLDOWN_MS = 1000; // 2 seconds

export const AssignItemScanner = ({ isOpen, onClose, onScanSuccess }) => {
    const isCooldownRef = useRef(false);

    const handleSuccess = useCallback(
        (decodedText) => {
            if (isCooldownRef.current) return;

            console.log("Scanned QR Code:", decodedText);
            if (onScanSuccess) onScanSuccess(decodedText);
            toast.success("Item assigned via scan!");

            isCooldownRef.current = true;
            setTimeout(() => {
                isCooldownRef.current = false;
            }, SCAN_COOLDOWN_MS);
        },
        [onScanSuccess]
    );

    const handleError = useCallback((errorMessage) => {
        console.warn("QR Scan error:", errorMessage);
    }, []);

    const scannerProps = useMemo(
        () => ({
            qrCodeSuccessCallback: handleSuccess,
            qrCodeErrorCallback: handleError,
            fps: 10,
            qrbox: 300,
            disableFlip: false,
        }),
        [handleSuccess, handleError]
    );

    return (
        <>
            <Toaster richColors position="top-center" expand={true} />
            <Dialog open={isOpen} onOpenChange={onClose}>
                <DialogContent className="w-[95%] sm:w-[90%] h-[90vh] p-4 lg:p-6" width="90%">
                    <DialogHeader>
                        <DialogTitle>Scan To Assign Items</DialogTitle>
                    </DialogHeader>

                    <QRScanner {...scannerProps} />

                    <DialogFooter>
                        <Button onClick={() => onClose()}>Close Scanner</Button>
                    </DialogFooter>
                </DialogContent>
            </Dialog>
        </>
    );
};

AssignItemScanner.propTypes;

export default AssignItemScanner;
