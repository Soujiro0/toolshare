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
