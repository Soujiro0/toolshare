import { Button } from "@/components/ui/button";
import { X } from "lucide-react";

export const getAuthorizedStudentColumns = (handlers = {}, excludeKeys = []) => [
    {
        accessorKey: "name",
        header: "Name",
        sortable: true,
    },
    {
        accessorKey: "student_id",
        header: "Student ID",
        sortable: true,
    },
    {
        id: "actions",
        header: "Actions",
        sortable: false,
        cell: ({ row }) => {
            const student = row.original;
            return (
                <div className="flex gap-2">
                    {handlers.onRemoveStudent && (
                        <Button variant="outline" onClick={() => handlers.onRemoveStudent(student.student_id)}>
                            <span>Remove Student</span>
                            <X />
                        </Button>
                    )}
                </div>
            );
        },
    },
].filter(col => !excludeKeys.includes(col.accessorKey || col.id));

export default getAuthorizedStudentColumns;
