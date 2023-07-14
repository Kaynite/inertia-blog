export interface User {
    id: number;
    name: string;
    email: string;
    email_verified_at: string;
}

export type PageProps<T extends Record<string, unknown> = Record<string, unknown>> = T & {
    auth: {
        user: User;
    };
};

export interface Post extends Record<string, unknown> {
    id: number;
    title: string;
    body: string;
    is_published: boolean;
    created_at: string;
    updated_at: string;
    categories?: Category[];
}

export interface Category extends Record<string, unknown> {
    id: number;
    name: string;
    created_at: string;
    updated_at: string;
}

export type PaginatedCollection<T> = {
    data: T[]
    meta: {
        links: Array<{ active: boolean, label: string, url: (string | null) }>,
    }
}
