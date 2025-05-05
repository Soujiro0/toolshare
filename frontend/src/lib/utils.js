import { clsx } from "clsx";
import { twMerge } from "tailwind-merge";

export function cn(...inputs) {
  return twMerge(clsx(inputs));
}

export function formatDate(dateString, options = {}) {
  if (!dateString) return "—";

  const defaultOptions = {
      year: "numeric",
      month: "short",
      day: "numeric",
  };

  const date = new Date(dateString);
  return date.toLocaleDateString(undefined, { ...defaultOptions, ...options });
}

export const formatDateTime = (dateString, options = {}) => {
  if (!dateString) return "Invalid date";
  const date = new Date(dateString);
  return new Intl.DateTimeFormat("en-US", {
      year: "numeric",
      month: "short",
      day: "numeric",
      hour: "numeric",
      minute: "2-digit",
      hour12: true,
      ...options,
  }).format(date);
};

import ExcelJS from "exceljs";
import { saveAs } from "file-saver";
import { toDataURL } from "qrcode";

export const exportUnitsToExcel = async (units) => {
  const workbook = new ExcelJS.Workbook();
  const worksheet = workbook.addWorksheet("Units");

  worksheet.columns = [
    { header: "Property No", key: "property_no", width: 20 },
    { header: "Brand", key: "brand", width: 20 },
    { header: "Model", key: "model", width: 20 },
    { header: "Specification", key: "specification", width: 30 },
    { header: "Condition", key: "item_condition", width: 15 },
    { header: "Status", key: "status", width: 15 },
  ];

  for (let i = 0; i < units.length; i++) {
    const unit = units[i];

    const row = worksheet.addRow({
      property_no: unit.property_no,
      brand: unit.brand || "N/A",
      model: unit.model || "N/A",
      specification: unit.specification || "N/A",
      item_condition: unit.item_condition || "N/A",
      status: unit.status || "N/A",
    });

    // Generate QR code
    const qrText = `${unit.property_no} ${unit.brand} ${unit.model}`;
    const qrBase64 = await toDataURL(qrText);

    const imageId = workbook.addImage({
      base64: qrBase64,
      extension: "png",
    });

    // Add QR image right beside data (column 7)
    worksheet.addImage(imageId, {
      tl: { col: 6, row: row.number - 1 },
      ext: { width: 100, height: 100 },
    });

    worksheet.getRow(row.number).height = 80;
  }

  const buffer = await workbook.xlsx.writeBuffer();
  saveAs(new Blob([buffer]), "Units_With_QR.xlsx");
};

