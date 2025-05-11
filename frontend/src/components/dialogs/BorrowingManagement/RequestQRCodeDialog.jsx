import { Button } from "@/components/ui/button";
import { Dialog, DialogContent, DialogFooter, DialogHeader, DialogTitle } from "@/components/ui/dialog";
import { Toaster } from "@/components/ui/sonner";
import { QRCodeSVG } from "qrcode.react";
import { useRef } from "react";

export const RequestQRCodeDialog = ({ isOpen, onClose, requestId }) => {
    const svgRef = useRef(null);

    const downloadQRCode = () => {
        const svg = svgRef.current?.querySelector("svg");
        if (!svg) return;

        // Create a canvas element
        const canvas = document.createElement("canvas");
        const svgData = new XMLSerializer().serializeToString(svg);
        const svgBlob = new Blob([svgData], { type: "image/svg+xml;charset=utf-8" });
        const url = URL.createObjectURL(svgBlob);

        const img = new Image();
        img.onload = () => {
            canvas.width = img.width;
            canvas.height = img.height;
            const ctx = canvas.getContext("2d");
            ctx.drawImage(img, 0, 0);
            URL.revokeObjectURL(url);

            // Create a PNG from canvas and trigger download
            const pngUrl = canvas.toDataURL("image/png");
            const downloadLink = document.createElement("a");
            downloadLink.href = pngUrl;
            downloadLink.download = `qr-request-${requestId}.png`;
            document.body.appendChild(downloadLink);
            downloadLink.click();
            document.body.removeChild(downloadLink);
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

RequestQRCodeDialog.propTypes;

export default RequestQRCodeDialog;