import { cn } from "@/lib/utils";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";

function Input({ className, type, icon, ...props }) {
  return (
    <div className="relative flex items-center">
      {/* Conditionally render the icon if it's provided */}
      {icon && (
        <span className="absolute left-3 text-muted-foreground text-sm">
          <FontAwesomeIcon icon={icon} />
        </span>
      )}
      <input
        type={type}
        data-slot="input"
        className={cn(
          "border-input file:text-foreground placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground",
          "flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1",
          // Add padding to the left to account for the icon (if it exists)
          icon ? "pl-9" : "pl-3",
          "text-base shadow-xs transition-[color,box-shadow] outline-none",
          "file:inline-flex file:h-7 file:border-0 file:bg-transparent file:text-sm file:font-medium",
          "disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm",
          "focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px]",
          "aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive",
          className
        )}
        {...props}
      />
    </div>
  );
}

export { Input };
