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
    timeZone: "Asia/Manila", // Set this to your expected timezone
  };

  const date = new Date(dateString);
  if (isNaN(date.getTime())) return "Invalid date";

  return new Intl.DateTimeFormat("en-US", {
    ...defaultOptions,
    ...options,
  }).format(date);
}

export const formatDateTime = (dateString, options = {}) => {
  if (!dateString) return "Invalid date";

  const isRawMySQL = /^\d{4}-\d{2}-\d{2} \d{2}:\d{2}:\d{2}$/.test(dateString);
  const fixedDateString = isRawMySQL
    ? dateString.replace(" ", "T") + "+08:00"
    : dateString;

  try {
    return new Date(fixedDateString).toLocaleString("en-US", {
      year: "numeric",
      month: "short",
      day: "numeric",
      hour: "numeric",
      minute: "2-digit",
      hour12: true,
      timeZone: "Asia/Manila", // optional here, since +08:00 is present
      ...options,
    });
  } catch {
    return "Invalid date";
  }
};

import ExcelJS from "exceljs";
import { saveAs } from "file-saver";
import { toDataURL } from "qrcode";

export const exportUnitsToExcel = async (units) => {
  const workbook = new ExcelJS.Workbook();
  const worksheet = workbook.addWorksheet("Units");

  worksheet.columns = [
    { header: "Property No", key: "property_no", width: 20 },
    
  ];

  for (let i = 0; i < units.length; i++) {
    const unit = units[i];

    const row = worksheet.addRow({
      property_no: unit.property_no,
    });

    // Generate QR code
    const qrText = `${unit.unit_id}`;
    const qrBase64 = await toDataURL(qrText);

    const imageId = workbook.addImage({
      base64: qrBase64,
      extension: "png",
    });

    // Add QR image right beside data (column 7)
    worksheet.addImage(imageId, {
      tl: { col: 2, row: row.number - 1 },
      ext: { width: 100, height: 100 },
    });

    worksheet.getRow(row.number).height = 80;
  }

  const buffer = await workbook.xlsx.writeBuffer();
  saveAs(new Blob([buffer]), "Units_With_QR.xlsx");
};

