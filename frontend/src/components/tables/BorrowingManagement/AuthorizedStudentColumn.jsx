import { Button } from "@/components/ui/button";
import { X } from "lucide-react";

export const getAuthorizedStudentColumns = (isMobile, handlers = {}, excludeKeys = []) => {
    const mobileColumns = [
        {
            accessorKey: "name",
            header: "Student Details",
            sortable: true,
            cell: ({ row }) => {
                const student = row.original;
                return (
                    <div className="space-y-1">
                        <div className="font-medium">{student.name}</div>
                        <div className="text-sm text-muted-foreground">ID: {student.student_id || "N/A"}</div>
                    </div>
                );
            },
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
                            <Button variant="outline" size="sm" onClick={() => handlers.onRemoveStudent(student.student_id)}>
                                <X className="h-4 w-4" />
                            </Button>
                        )}
                    </div>
                );
            },
        },
    ];

    const desktopColumns = [
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
    ];

    const columns = isMobile ? mobileColumns : desktopColumns;
    return columns.filter((col) => !excludeKeys.includes(col.accessorKey || col.id));
};

export default getAuthorizedStudentColumns;