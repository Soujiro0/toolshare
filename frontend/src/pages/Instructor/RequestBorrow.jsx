import ApiService from "@/api/ApiService";
import SelectItemsDialog from "@/components/dialogs/BorrowingManagement/SelectItemsDialog";
import Header from "@/components/layout/Header";
import { getAuthorizedStudentColumns } from "@/components/tables/BorrowingManagement/AuthorizedStudentColumn";
import { getSelectedItemsColumns } from "@/components/tables/BorrowingManagement/SelectedItemsColumn";
import DataTable from "@/components/tables/DataTable";
import { Button } from "@/components/ui/button";
import { Card, CardContent, CardDescription, CardFooter, CardHeader, CardTitle } from "@/components/ui/card";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Toaster } from "@/components/ui/sonner";
import { Textarea } from "@/components/ui/textarea";
import { AuthContext } from "@/context/AuthContext";
import { LoaderCircle, Plus } from "lucide-react";
import { useContext, useState } from "react";
import { toast } from "sonner";

const RequestBorrow = () => {
    const { auth } = useContext(AuthContext);
    const userId = auth.user?.user_id;

    const [isSubmitting, setIsSubmitting] = useState(false);
    const [remarks, setRemarks] = useState("");
    const [selectedItems, setSelectedItems] = useState([]);
    const [authorizedStudents, setAuthorizedStudents] = useState([]);
    const [dialogOpen, setDialogOpen] = useState(false);
    const [studentName, setStudentName] = useState("");
    const [studentId, setStudentId] = useState("");

    const handleAddStudent = () => {
        if (studentName && studentId) {
            setAuthorizedStudents((prev) => [...prev, { name: studentName, student_id: studentId }]);
            setStudentName("");
            setStudentId("");
        } else {
            toast.error("Please enter both student name and ID.");
        }
    };

    const handleRemoveItem = (itemId) => {
        setSelectedItems((prev) => prev.filter((item) => item.item_id !== itemId));
    };

    const handleRemoveStudent = (studentIdToRemove) => {
        setAuthorizedStudents((prev) => prev.filter((student) => student.student_id !== studentIdToRemove));
    };

    const handleSubmitRequest = async () => {
        if (selectedItems.length === 0) {
            toast.error("Please select at least one item to borrow.");
            return;
        }

        if (authorizedStudents.length === 0) {
            toast.error("Please add at least one authorized student.");
            return;
        }

        const payload = {
            user_id: userId,
            purpose: remarks,
            authorized_student: authorizedStudents,
            remarks: remarks,
            items: selectedItems.map((item) => ({
                item_id: item.item_id,
                quantity: item.quantity,
            })),
        };

        console.log("Submitting payload:", payload);
        // Send payload to backend here
        handleSubmitRequestCall(payload);
    };

    const handleSubmitRequestCall = async (payload) => {
        setIsSubmitting(true);
        try {
            const data = await ApiService.RequestBorrowService.createRequest(payload);
            console.log("Request created successfully:", data);
            toast.success("Request created successfully", {
                description: "Your request has been submitted for approval.",
            });
        } catch (error) {
            console.log("Error creating request:", error);
            toast.error("Error creating request");
        } finally {
            setRemarks("");
            setSelectedItems([]);
            setAuthorizedStudents([]);
            setDialogOpen(false);
            setIsSubmitting(false);
        }
    };

    const studentColumns = getAuthorizedStudentColumns({
        onRemoveStudent: handleRemoveStudent,
    });

    const selectedItemColumns = getSelectedItemsColumns({
        onRemove: handleRemoveItem,
    });

    return (
        <>
            <Toaster richColors position="top-center" expand={true} />

            <Header headerTitle="Request Borrow" />

            <Card className="lg:p-6 px-0 py-4 shadow-lg">
                <CardHeader>
                    <CardTitle>Request Form</CardTitle>
                    <CardDescription>Fill up the the and send a request for borrowing</CardDescription>
                </CardHeader>

                <CardContent className="flex flex-col gap-5">
                    <div>
                        <Label>User ID: {userId}</Label>
                    </div>
                    <div className="space-y-4">
                        <div className="space-y-2 flex flex-col">
                            <Label>Purpose:</Label>
                            <Textarea
                                className="resize-none min-h-[100px]"
                                placeholder="Write your purpose of request"
                                value={remarks}
                                onChange={(e) => setRemarks(e.target.value)}
                                name="purpose"
                            />
                        </div>

                        <div className="space-y-2 flex flex-col">
                            <Label>Authorized Students:</Label>
                            <div className="flex flex-col sm:flex-row gap-2">
                                <div className="grid grid-cols-1 sm:grid-cols-2 gap-2 flex-grow">
                                    <Input value={studentName} onChange={(e) => setStudentName(e.target.value)} placeholder="Student Name" />
                                    <Input value={studentId} onChange={(e) => setStudentId(e.target.value)} placeholder="Student ID" />
                                </div>
                                <Button className="w-full sm:w-auto" onClick={handleAddStudent}>
                                    <span>Add Student</span>
                                    <Plus className="ml-2 h-4 w-4" />
                                </Button>
                            </div>

                            <div className="mt-2 overflow-x-auto">
                                <DataTable
                                    columns={studentColumns}
                                    data={authorizedStudents}
                                    searchKeys={["name"]}
                                    filters={[]}
                                    showEntries={false}
                                    showSearchFilter={false}
                                    entrySize={5}
                                />
                            </div>
                        </div>
                    </div>

                    <div className="space-y-2 flex flex-col">
                        <div className="flex flex-col sm:flex-row items-start sm:items-center gap-2">
                            <Label>Selected Items:</Label>
                            <Button className="w-full sm:w-auto sm:ml-auto" onClick={() => setDialogOpen(true)}>
                                <span>Add Items</span>
                                <Plus className="ml-2 h-4 w-4" />
                            </Button>
                        </div>
                        <div className="overflow-x-auto">
                            <DataTable data={selectedItems} columns={selectedItemColumns} showEntries={false} showSearchFilter={false} />
                        </div>
                    </div>
                </CardContent>

                <CardFooter className="flex flex-col sm:flex-row gap-2">
                    {isSubmitting ? (
                        <Button className="w-full sm:w-auto" disabled onClick={handleSubmitRequest}>
                            <LoaderCircle className="mr-2 h-4 w-4 animate-spin" />
                            Sending Request...
                        </Button>
                    ) : (
                        <Button className="w-full sm:w-auto" onClick={handleSubmitRequest}>
                            Send Request
                        </Button>
                    )}
                </CardFooter>
            </Card>

            <SelectItemsDialog open={dialogOpen} onClose={() => setDialogOpen(false)} selectedItems={selectedItems} onSelect={setSelectedItems} />
        </>
    );
};

export default RequestBorrow;
