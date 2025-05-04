import { Button } from "@/components/ui/button";
import {
    Dialog,
    DialogContent,
    DialogFooter,
    DialogHeader,
    DialogTitle,
} from "@/components/ui/dialog";
import PropTypes from "prop-types";

const DeleteRequestDialog = ({ isOpen, onClose, request, onDelete }) => {

    return (
        <Dialog open={isOpen} onOpenChange={onClose}>
            <DialogContent>
                <DialogHeader>
                    <DialogTitle>Confirm Delete</DialogTitle> 
                </DialogHeader>
                <p>
                    Are you sure you want to delete request{" "}
                    <strong>ID #{request?.request_id}</strong>?
                </p>
                <DialogFooter>
                    <Button onClick={onClose} variant="outline">
                        Cancel
                    </Button>
                    <Button onClick={onDelete} variant="destructive">
                        Delete
                    </Button>
                </DialogFooter>
            </DialogContent>
        </Dialog>
    );
};

DeleteRequestDialog.propTypes = {
    isOpen: PropTypes.bool.isRequired,
    onClose: PropTypes.func.isRequired,
    request: PropTypes.object.isRequired,
    onDelete: PropTypes.func.isRequired,
};

export default DeleteRequestDialog;