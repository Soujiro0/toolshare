import ApiService from "@/api/ApiService";
import Header from "@/components/layout/Header";
import DataTable from "@/components/tables/DataTable";
import { getUnitColumns } from "@/components/tables/InventoryManagement/ItemUnitColumn";
import { Button } from "@/components/ui/button";
import { exportUnitsToExcel } from "@/lib/utils";
import { useEffect, useState } from "react";

export const ExportUnitsQr = () => {

    const [data, setData] = useState([]);
    const [loading, setLoading] = useState(false);

    const fetchUnits = async () => {
        setLoading(true);
        try {
            const res = await ApiService.ItemService.getItemUnits();
            setData(res.data);
        } catch (error) {
            console.error("Error fetching items:", error);
        } finally {
            setLoading(false);
        }
    }

    const columns = getUnitColumns({}, ["actions"]);

    useEffect(() => {
        fetchUnits();
        // Cleanup function to avoid memory leaks
        return () => {
            setData([]);
            setLoading(false);
        };
    }, [])

    return (
        <div className="px-1 sm:px-2 lg:px-2 py-2 sm:py-2 space-y-4 sm:space-y-2">
            <Header headerTitle="Unit Export QR code"/>
            <div className="flex justify-end mb-4">
            <Button onClick={() => exportUnitsToExcel(data)}>Export to CSV</Button>
            </div>
            <DataTable data={data} columns={columns} showSearchFilter={false} isLoading={loading}/>
        </div>
    );
};

export default ExportUnitsQr;