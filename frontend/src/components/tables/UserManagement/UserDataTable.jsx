import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Pagination, PaginationContent, PaginationItem, PaginationLink, PaginationNext, PaginationPrevious } from "@/components/ui/pagination";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table";
import { flexRender, getCoreRowModel, getFilteredRowModel, getPaginationRowModel, getSortedRowModel, useReactTable } from "@tanstack/react-table";
// import { saveAs } from "file-saver";
import { Plus } from "lucide-react";
import PropTypes from "prop-types";
import { useMemo, useState } from "react";
import { Label } from "../../ui/label";

export function UserDataTable({ columns, data, onViewUserDetails, openAddUser, loading }) {
    const [globalFilter, setGlobalFilter] = useState("");
    const [filters, setFilters] = useState({ name: "" });
    const [sorting, setSorting] = useState([]);
    const [pagination, setPagination] = useState({ pageIndex: 0, pageSize: 10 });

    const filteredData = useMemo(() => {
        const { field = "name", query = "" } = filters;
        return data.filter((item) => {
            const value = item[field];
            return query ? String(value).toLowerCase().includes(query.toLowerCase()) : true;
        });
    }, [data, filters]);

    const table = useReactTable({
        data: filteredData,
        columns: columns(onViewUserDetails),
        state: { globalFilter, sorting, pagination },
        getCoreRowModel: getCoreRowModel(),
        getPaginationRowModel: getPaginationRowModel(),
        getSortedRowModel: getSortedRowModel(),
        getFilteredRowModel: getFilteredRowModel(),
        onSortingChange: setSorting,
        onGlobalFilterChange: setGlobalFilter,
        onPaginationChange: setPagination,
        manualPagination: false,
    });

    const totalPages = table.getPageCount();
    const currentPage = table.getState().pagination.pageIndex + 1;

    // const exportData = (format) => {
    //     const rows = table.getFilteredRowModel().rows.map((row) => row.original);
    //     let fileData;

    //     if (format === "csv") {
    //         fileData =
    //             "data:text/csv;charset=utf-8," + Object.keys(rows[0]).join(",") + "\n" + rows.map((row) => Object.values(row).join(",")).join("\n");
    //     } else if (format === "json") {
    //         fileData = JSON.stringify(rows, null, 2);
    //     } else {
    //         fileData = rows.map((row) => Object.values(row).join(" ")).join("\n");
    //     }

    //     const blob = new Blob([fileData], { type: "text/plain;charset=utf-8" });
    //     saveAs(blob, `user_management.${format}`);
    // };

    return (
        <div className="p-4">
            <div className="flex gap-4 mb-4 items-center">
                {/* Search Input */}
                <Label>Search</Label>
                <Input
                    placeholder={`Search by ${filters.field ?? "name"}...`}
                    value={filters.query}
                    onChange={(e) => setFilters((prev) => ({ ...prev, query: e.target.value }))}
                    icon={"magnifying-glass"}
                    className="w-full"
                />
                {/* Field Selector */}
                <Select value={filters.field} onValueChange={(value) => setFilters({ field: value, query: "" })}>
                    <SelectTrigger className="w-[180px]">
                        <SelectValue placeholder="Filter by..." />
                    </SelectTrigger>
                    <SelectContent>
                        <SelectItem value="name">Name</SelectItem>
                        <SelectItem value="username">User name</SelectItem>
                        <SelectItem value="email">Email</SelectItem>
                    </SelectContent>
                </Select>
                {/* <div className="flex items-center gap-1">
                    <Button onClick={() => exportData("csv")}>Export CSV</Button>
                    <Button onClick={() => exportData("txt")}>Export TXT</Button>
                </div> */}
                <Button className="ml-auto" onClick={() => openAddUser(true)}>
                    <Plus /> Add New User
                </Button>
            </div>

            <div className="gap-2 flex items-center mb-4">
                <Label>Show</Label>
                <Select
                    onValueChange={(value) => setPagination((prev) => ({ ...prev, pageSize: Number(value) }))}
                    value={pagination.pageSize.toString()}
                >
                    <SelectTrigger className="w-[100px]">
                        <SelectValue />
                    </SelectTrigger>
                    <SelectContent>
                        {[5, 10, 20, 50].map((size) => (
                            <SelectItem key={size} value={size.toString()}>
                                {size}
                            </SelectItem>
                        ))}
                    </SelectContent>
                </Select>
                <Label>Entries</Label>
            </div>

            <Table>
                <TableHeader>
                    {table.getHeaderGroups().map((headerGroup) => (
                        <TableRow key={headerGroup.id}>
                            {headerGroup.headers.map((header) => (
                                <TableHead key={header.id} onClick={header.column.getToggleSortingHandler()} className="cursor-pointer">
                                    {flexRender(header.column.columnDef.header, header.getContext())}
                                    {header.column.getIsSorted() === "asc" ? " ▲" : header.column.getIsSorted() === "desc" ? " ▼" : ""}
                                </TableHead>
                            ))}
                        </TableRow>
                    ))}
                </TableHeader>
                <TableBody>
                    {loading ? (
                        <TableRow>
                            <TableCell colSpan={columns().length} className="text-center p-10">
                                <h1 className="font-bold">Loading...</h1>
                            </TableCell>
                        </TableRow>
                    ) : table.getRowModel().rows.length === 0 ? (
                        <TableRow>
                            <TableCell colSpan={columns().length} className="text-center p-10">
                                <span>No data found.</span>
                            </TableCell>
                        </TableRow>
                    ) : (
                        table.getRowModel().rows.map((row) => (
                            <TableRow
                                key={row.id}
                                className="cursor-pointer hover:bg-gray-100"
                                onClick={() => console.log("Viewing: " + row.original)}
                            >
                                {row.getVisibleCells().map((cell) => (
                                    <TableCell key={cell.id}>{flexRender(cell.column.columnDef.cell, cell.getContext())}</TableCell>
                                ))}
                            </TableRow>
                        ))
                    )}
                </TableBody>
            </Table>

            {loading || table.getRowModel().rows.length === 0 ? (
                <></>
            ) : (
                <>
                    <div className="mt-4 flex justify-center">
                        <Pagination>
                            <PaginationContent>
                                <PaginationItem>
                                    <PaginationPrevious onClick={() => table.previousPage()} disabled={!table.getCanPreviousPage()} />
                                </PaginationItem>

                                {Array.from({ length: totalPages }, (_, i) => i + 1).map((page) => (
                                    <PaginationItem key={page}>
                                        <PaginationLink isActive={currentPage === page} onClick={() => table.setPageIndex(page - 1)}>
                                            {page}
                                        </PaginationLink>
                                    </PaginationItem>
                                ))}

                                <PaginationItem>
                                    <PaginationNext
                                        onClick={() => {
                                            if (totalPages > 1 && currentPage < totalPages) {
                                                table.nextPage();
                                            }
                                        }}
                                        disabled={!table.getCanNextPage()}
                                    />
                                </PaginationItem>
                            </PaginationContent>
                        </Pagination>
                    </div>
                </>
            )}
        </div>
    );
}

UserDataTable.propTypes = {
    columns: PropTypes.func.isRequired,
    data: PropTypes.array.isRequired,
    onViewUserDetails: PropTypes.func.isRequired,
    openAddUser: PropTypes.func.isRequired,
    loading: PropTypes.bool,
};

export default UserDataTable;
