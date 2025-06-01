import { useState } from "react";
import { toast } from "sonner";

export const useApiHandler = () => {
    const [isloading, setLoading] = useState(false);

    const handleApiAction = async ({
        apiCall,
        successMessage,
        errorMessage,
        afterSuccess,
        afterError,
    }) => {
        setLoading(true);
        try {
            const response = await apiCall();

            if (successMessage) {
                toast.success(successMessage.title, {
                    description:
                        typeof successMessage.description === "function"
                            ? successMessage.description(response)
                            : successMessage.description,
                });
            }

            afterSuccess?.(response);
        } catch (error) {
            console.error(errorMessage?.consoleMessage || "API Error", error);

            toast.error(errorMessage?.toastMessage || "Something went wrong", {
                description:
                    typeof errorMessage?.description === "function"
                        ? errorMessage.description(error)
                        : errorMessage?.description,
            });

            afterError?.(error);
        } finally {
            setLoading(false);
        }
    };

    return { handleApiAction, isloading };
};