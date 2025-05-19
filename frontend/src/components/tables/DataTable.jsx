import { Button } from "@/components/ui/button";
import { Input } from "@/components/ui/input";
import { Label } from "@/components/ui/label";
import { Select, SelectContent, SelectItem, SelectTrigger, SelectValue } from "@/components/ui/select";
import { Table, TableBody, TableCell, TableHead, TableHeader, TableRow } from "@/components/ui/table";
import { flexRender, getCoreRowModel, getPaginationRowModel, getSortedRowModel, useReactTable } from "@tanstack/react-table";
import { ChevronDown, ChevronUp, LoaderCircle } from "lucide-react";
import PropTypes from "prop-types";
import React from "react";

export default function DataTable({
    columns,
    data,
    searchKeys = [],
    filters = [],
    showSearchFilter = true,
    showEntries = true,
    entrySize = 10,
    showPagignation = true,
    isLoading = false,
}) {
    const [sorting, setSorting] = React.useState([]);
    const [pagination, setPagination] = React.useState({
        pageIndex: 0,
        pageSize: entrySize,
    });
    const [searchQuery, setSearchQuery] = React.useState("");
    const [filterValues, setFilterValues] = React.useState({});
    const [selectedFilterKey, setSelectedFilterKey] = React.useState(null);

    const filteredData = React.useMemo(() => {
        let filtered = data;

        if (searchQuery) {
            filtered = filtered.filter((row) =>
                searchKeys.some((key) => {
                    const value = row[key]?.toString().toLowerCase() || "";
                    return value.includes(searchQuery.toLowerCase());
                })
            );
        }

        if (Object.keys(filterValues).length > 0) {
            filtered = filtered.filter((row) => {
                return Object.keys(filterValues).every((key) => {
                    const filterVal = filterValues[key];
                    if (!filterVal || filterVal === "All" || filterVal === "select") return true;

                    const [objectKey, nestedKey] = key.split(".");
                    const value = nestedKey ? row[objectKey]?.[nestedKey] : row[objectKey];
                    return value && value.toString().toLowerCase().includes(filterVal.toString().toLowerCase());
                });
            });
        }

        return filtered;
    }, [data, searchQuery, searchKeys, filterValues]);

    const table = useReactTable({
        data: filteredData,
        columns,
        state: {
            sorting,
            pagination,
        },
        onPaginationChange: setPagination,
        onSortingChange: setSorting,
        getCoreRowModel: getCoreRowModel(),
        getSortedRowModel: getSortedRowModel(),
        getPaginationRowModel: getPaginationRowModel(),
        manualPagination: false,
    });

    const handlePageSizeChange = (value) => {
        setPagination({
            pageIndex: 0,
            pageSize: Number(value),
        });
    };

    const handleFilterChange = (key, value) => {
        setFilterValues((prevFilters) => ({
            ...prevFilters,
            [key]: value,
        }));
    };

    return (
        <div className="rounded-xl border shadow-sm p-2 md:p-4">
            {showSearchFilter && (
                <div className="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-4">
                    <div className="flex items-center gap-2 w-full md:w-auto">
                        <Input
                            value={searchQuery}
                            onChange={(e) => setSearchQuery(e.target.value)}
                            placeholder="Search..."
                            icon={"magnifying-glass"}
                            className="w-full md:w-[300px]"
                        />
                    </div>

                    {filters.length > 0 && (
                        <div className="flex flex-col md:flex-row items-start md:items-center gap-2">
                            <div className="flex items-center gap-2 w-full md:w-auto">
                                <Label className="text-xs whitespace-nowrap">Filter By:</Label>
                                <Select
                                    value={selectedFilterKey || "Select"}
                                    onValueChange={(value) => {
                                        if (value === "none") {
                                            setSelectedFilterKey(null);
                                            setFilterValues({});
                                        } else {
                                            setSelectedFilterKey(value);
                                        }
                                    }}
                                >
                                    <SelectTrigger className="w-full md:w-[150px]">
                                        <SelectValue placeholder="Select Filter" />
                                    </SelectTrigger>
                                    <SelectContent>
                                        <SelectItem key="select" disabled value="Select">
                                            Select Filter
                                        </SelectItem>
                                        <SelectItem key="none" value="none">
                                            None
                                        </SelectItem>
                                        {filters.map((filter) => (
                                            <SelectItem key={filter.key} value={filter.key}>
                                                {filter.label}
                                            </SelectItem>
                                        ))}
                                    </SelectContent>
                                </Select>
                            </div>

                            {selectedFilterKey && filters.length > 0 && (
                                <div className="flex items-center gap-2 w-full md:w-auto">
                                    {filters
                                        .filter((filter) => filter.key === selectedFilterKey)
                                        .map((filter) => {
                                            if (filter.type === "select") {
                                                return (
                                                    <div key={filter.key} className="flex space-x-1">
                                                        <Label className="text-xs">Value:</Label>
                                                        <Select
                                                            value={filterValues[filter.key] ?? "All"}
                                                            onValueChange={(value) => handleFilterChange(filter.key, value)}
                                                        >
                                                            <SelectTrigger className="w-full md:w-[150px]">
                                                                <SelectValue placeholder="Select Value" />
                                                            </SelectTrigger>
                                                            <SelectContent>
                                                                <SelectItem key="select" disabled value="Select">
                                                                    Select Value
                                                                </SelectItem>
                                                                <SelectItem key="all" value="All">
                                                                    All
                                                                </SelectItem>
                                                                {filter.values.map((option) => {
                                                                    const label =
                                                                        typeof option === "string" ? option.replace(/_/g, " ") : option.label;
                                                                    const value = typeof option === "string" ? option : option.value;
                                                                    return (
                                                                        <SelectItem key={value} value={value}>
                                                                            {label}
                                                                        </SelectItem>
                                                                    );
                                                                })}
                                                            </SelectContent>
                                                        </Select>
                                                    </div>
                                                );
                                            }

                                            if (filter.type === "input") {
                                                return (
                                                    <div key={filter.key} className="flex space-x-1">
                                                        <Label className="text-xs">Value:</Label>
                                                        <Input
                                                            type="date"
                                                            value={filterValues[filter.key] || ""}
                                                            onChange={(e) => handleFilterChange(filter.key, e.target.value)}
                                                            className="w-full md:w-[150px] text-sm"
                                                        />
                                                    </div>
                                                );
                                            }

                                            return null;
                                        })}
                                </div>
                            )}
                        </div>
                    )}
                </div>
            )}

            {showEntries && (
                <div className="flex items-center gap-2 mb-4">
                    <span className="text-xs md:text-sm text-muted-foreground">Show</span>
                    <Select value={String(pagination.pageSize)} onValueChange={handlePageSizeChange}>
                        <SelectTrigger className="w-[70px] md:w-[100px]">
                            <SelectValue />
                        </SelectTrigger>
                        <SelectContent>
                            {[5, 10, 20, 50].map((size) => (
                                <SelectItem key={size} value={String(size)}>
                                    {size}
                                </SelectItem>
                            ))}
                        </SelectContent>
                    </Select>
                    <span className="text-xs md:text-sm text-muted-foreground">entries</span>
                </div>
            )}

            <div className="overflow-x-auto -mx-2 md:mx-0">
                <Table className="min-w-full table-auto">
                    <TableHeader>
                        {table.getHeaderGroups().map((headerGroup) => (
                            <TableRow key={headerGroup.id}>
                                {headerGroup.headers.map((header) => {
                                    const isSorted = header.column.getIsSorted();
                                    const isSortable = header.column.columnDef.sortable;
                                    return (
                                        <TableHead
                                            key={header.id}
                                            onClick={isSortable ? header.column.getToggleSortingHandler() : undefined}
                                            className={`cursor-pointer select-none ${
                                                !isSortable ? "text-muted-foreground" : ""
                                            } bg-gray-200 text-xs md:text-sm whitespace-nowrap px-2 py-2 md:px-4 md:py-3`}
                                        >
                                            <div className="flex items-center gap-1">
                                                {flexRender(header.column.columnDef.header, header.getContext())}
                                                {isSorted === "asc" && <ChevronUp className="h-3 w-3 md:h-4 md:w-4" />}
                                                {isSorted === "desc" && <ChevronDown className="h-3 w-3 md:h-4 md:w-4" />}
                                            </div>
                                        </TableHead>
                                    );
                                })}
                            </TableRow>
                        ))}
                    </TableHeader>
                    <TableBody>
                        {isLoading ? (
                            <TableRow>
                                <TableCell colSpan={columns.length} className="text-center py-4 font-bold">
                                    <span className="flex items-center justify-center gap-2">
                                        <LoaderCircle className="animate-spin" />
                                        Loading... Please wait
                                    </span>
                                </TableCell>
                            </TableRow>
                        ) : data.length <= 0 ? (
                            <TableRow>
                                <TableCell colSpan={columns.length} className="text-center py-4 font-bold">
                                    <span className="flex items-center justify-center gap-2">
                                        <p>No Data Available</p>
                                    </span>
                                </TableCell>
                            </TableRow>
                        ) : (
                            table.getRowModel().rows.map((row) => (
                                <TableRow key={row.id}>
                                    {row.getVisibleCells().map((cell) => (
                                        <TableCell key={cell.id} className="px-2 py-1 md:px-4 md:py-2 text-xs md:text-sm">
                                            {flexRender(cell.column.columnDef.cell, cell.getContext())}
                                        </TableCell>
                                    ))}
                                </TableRow>
                            ))
                        )}
                    </TableBody>
                </Table>
            </div>

            {showPagignation && (
                <div className="flex flex-col md:flex-row items-center justify-between gap-4 mt-4">
                    <div className="text-xs md:text-sm text-muted-foreground order-2 md:order-1">
                        {isLoading
                            ? "Loading..."
                            : table.getRowModel().rows.length > 0
                            ? `Page ${table.getState().pagination.pageIndex + 1} of ${table.getPageCount()}`
                            : "No data available"}
                    </div>
                    <div className="flex gap-2 w-full md:w-auto order-1 md:order-2">
                        <Button
                            variant="outline"
                            size="sm"
                            className="flex-1 md:flex-none text-xs md:text-sm"
                            onClick={() => table.previousPage()}
                            disabled={!table.getCanPreviousPage() || isLoading}
                        >
                            Previous
                        </Button>
                        <Button
                            variant="outline"
                            size="sm"
                            className="flex-1 md:flex-none text-xs md:text-sm"
                            onClick={() => table.nextPage()}
                            disabled={!table.getCanNextPage() || isLoading}
                        >
                            Next
                        </Button>
                    </div>
                </div>
            )}
        </div>
    );
}

DataTable.propTypes = {
    columns: PropTypes.array.isRequired,
    data: PropTypes.array.isRequired,
    searchKeys: PropTypes.array,
    filters: PropTypes.array,
    showSearchFilter: PropTypes.bool,
    showEntries: PropTypes.bool,
    entrySize: PropTypes.number,
    showPagignation: PropTypes.bool,
    isLoading: PropTypes.bool,
};

DataTable.defaultProps = {
    searchKeys: [],
    filters: [],
    showSearchFilter: true,
    entrySize: 10,
    showEntries: true,
    showPagignation: true,
    isLoading: false,
};
