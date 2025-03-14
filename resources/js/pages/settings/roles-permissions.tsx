import { Head } from '@inertiajs/react';
import { usePage } from '@inertiajs/react';

import HeadingSmall from '@/components/heading-small';
import { type BreadcrumbItem } from '@/types';

import AppLayout from '@/layouts/app-layout';
import SettingsLayout from '@/layouts/settings/layout';

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Roles & permissions settings',
        href: '/settings/roles-permissions',
    },
];

export default function RolesPermissions() {
    const { userRoles, userPermissions }: any = usePage().props;
    return (
        <AppLayout breadcrumbs={breadcrumbs}>
            <Head title="Appearance settings" />

            <SettingsLayout>
                <div className="space-y-6">
                    <div>
                        <HeadingSmall title="Role" />
                        <ul>
                            {userRoles.map((role: string) => (
                                <li>{role}</li>
                            ))}
                        </ul>
                    </div>
                    <div>
                        <HeadingSmall title="Permissions" />
                        <ul>
                            {userPermissions.map((permission: string) => (
                                <li>{permission}</li>
                            ))}
                        </ul>
                    </div>
                </div>
            </SettingsLayout>
        </AppLayout>
    );
}
