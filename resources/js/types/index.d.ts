export interface User {
    [x: string]: any;
    id: number;
    username: string;
    name: string;
    last_name: string;
    email: string;
    email_verified_at: string;
}

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    auth: {
        user: User;
    };
};
