<script setup lang="ts">
import AppLayout from '@/layouts/AppLayout.vue';
import { dashboard } from '@/routes';
import { type BreadcrumbItem } from '@/types';
import { Head } from '@inertiajs/vue3';
import PlaceholderPattern from '../../components/PlaceholderPattern.vue';
import { Button } from "@/components/ui/button"
import { Input } from "@/components/ui/input"
import CreateTeam from '@/components/blocks/teams/CreateTeam.vue';
import TeamDashboard from '@/components/blocks/teams/TeamDashboard.vue';

import {
  Table,
  TableBody,
  TableCaption,
  TableCell,
  TableHead,
  TableHeader,
  TableRow,
} from '@/components/ui/table'

import {
  Empty,
  EmptyContent,
  EmptyDescription,
  EmptyHeader,
  EmptyMedia,
  EmptyTitle,
} from '@/components/ui/empty'
import { FolderOpen } from 'lucide-vue-next'

interface Props {
    isTeamOwner?: boolean | object;
}

const props = defineProps<Props>();

const breadcrumbs: BreadcrumbItem[] = [
    {
        title: 'Teams',
        href: dashboard().url,
    },
];
</script>

<template>
    <Head title="Dashboard" />

    <AppLayout :breadcrumbs="breadcrumbs">
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <div
                class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border"
                
                >
                <div v-if="!isTeamOwner">
                   <CreateTeam />
                </div>
                <div v-else>
                    <TeamDashboard />
                </div>

            </div>
        </div>
    </AppLayout>
</template>
