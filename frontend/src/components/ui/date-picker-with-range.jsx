"use client";

import { Popover } from "@headlessui/react";
import { addDays, format } from "date-fns";
import { CalendarIcon } from "lucide-react";
import { useState } from "react";
import { Calendar } from "react-day-picker";
import "react-day-picker/dist/style.css";

const DatePickerWithRange = () => {
    const [date, setDate] =
        (useState < DateRange) |
        (undefined >
            {
                from: new Date(2022, 0, 20),
                to: addDays(new Date(2022, 0, 20), 20),
            });

    return (
        <div className="relative w-full max-w-xs">
            <Popover className="relative">
                <Popover.Button className="w-full flex items-center gap-2 border rounded-xl px-4 py-2 text-sm shadow-sm hover:shadow-md transition-all bg-white">
                    <CalendarIcon className="w-4 h-4 text-gray-500" />
                    <span className="text-gray-700">
                        {date?.from ? (
                            date.to ? (
                                <>
                                    {format(date.from, "LLL dd, y")} - {format(date.to, "LLL dd, y")}
                                </>
                            ) : (
                                format(date.from, "LLL dd, y")
                            )
                        ) : (
                            "Pick a date"
                        )}
                    </span>
                </Popover.Button>
                <Popover.Panel className="absolute z-10 mt-2 bg-white border rounded-xl shadow-lg p-4">
                    <div className="flex flex-col">
                        <DatePickerCalendar date={date} setDate={setDate} />
                    </div>
                </Popover.Panel>
            </Popover>
        </div>
    );
};

const DatePickerCalendar = ({ date, setDate }) => {
  return (
    <div className="p-2">
      <Calendar
        mode="range"
        selected={date}
        onSelect={setDate}
        numberOfMonths={2}
        className="rounded-lg"
      />
    </div>
  );
};

export default DatePickerWithRange;
