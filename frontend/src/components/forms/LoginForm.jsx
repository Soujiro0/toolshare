import { Button } from "@/components/ui/button";
import { Card, CardContent, CardHeader, CardTitle } from "@/components/ui/card";
import { Form, FormControl, FormField, FormItem, FormLabel, FormMessage } from "@/components/ui/form";
import { Input } from "@/components/ui/input";
import { library } from "@fortawesome/fontawesome-svg-core";
import { fas } from "@fortawesome/free-solid-svg-icons";
import PropTypes from "prop-types";
import { useForm } from "react-hook-form";
library.add(fas);

const LoginForm = ({ handleSubmit, setUser, setPassword }) => {
    const form = useForm({
        defaultValues: {
            username: "",
            password: "",
        },
    });

    const onSubmit = (values) => {
        setUser(values.username);
        setPassword(values.password);
        handleSubmit({ preventDefault: () => {} });
    };

    return (
        <Card className="w-[350px] shadow-lg border-blue-200">
            <CardHeader>
                <CardTitle className="text-left mb-5">
                    <h1 className="text-3xl font-bold text-[var(--primary-color)] mb-1">Log In</h1>
                    <p className="font-medium">Access your account</p>
                </CardTitle>
            </CardHeader>
            <CardContent>
                <Form {...form}>
                    <form onSubmit={form.handleSubmit(onSubmit)} className="space-y-4">
                        <FormField
                            control={form.control}
                            name="username"
                            rules={{ required: "Username is required" }}
                            render={({ field }) => (
                                <FormItem>
                                    <FormLabel className="my-2">Username</FormLabel>
                                    <FormControl>
                                        <Input className="font-medium" type="text" placeholder="Enter your username" {...field} icon={"user"} />
                                    </FormControl>
                                    <FormMessage />
                                </FormItem>
                            )}
                        />
                        <FormField
                            control={form.control}
                            name="password"
                            rules={{ required: "Password is required" }}
                            render={({ field }) => (
                                <FormItem>
                                    <FormLabel className="my-2">Password</FormLabel>
                                    <FormControl>
                                        <Input className="font-medium" type="password" placeholder="Enter your password" {...field} icon={"lock"} />
                                    </FormControl>
                                    <FormMessage />
                                </FormItem>
                            )}
                        />
                        <Button type="submit" customColor={true} size="lg" className="bg-[var(--primary-color)] hover:bg-[var(--primary-color-hover)] text-[var(--text-color-light)] w-full">
                            Log In
                        </Button>
                    </form>
                </Form>
            </CardContent>
        </Card>
    );
};

LoginForm.propTypes = {
    handleSubmit: PropTypes.func.isRequired,
    setUser: PropTypes.func.isRequired,
    setPassword: PropTypes.func.isRequired,
};

export default LoginForm;
