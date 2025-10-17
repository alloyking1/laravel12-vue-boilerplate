<script setup lang="ts">
import {
    SidebarGroup,
    SidebarGroupLabel,
    SidebarMenu,
    SidebarMenuButton,
    SidebarMenuItem,
} from '@/components/ui/sidebar';
import { urlIsActive } from '@/lib/utils';
import { type NavItem } from '@/types';
import { Link, usePage } from '@inertiajs/vue3';
import {
  Collapsible,
  CollapsibleContent,
  CollapsibleTrigger,
} from '@/components/ui/collapsible'

import { ChevronsUpDown } from "lucide-vue-next"

defineProps<{
    items: NavItem[];
}>();

const page = usePage();
</script>

<template>
    <SidebarGroup class="px-2 py-0">
        <SidebarGroupLabel>Platform</SidebarGroupLabel>
        <SidebarMenu>
            <SidebarMenuItem v-for="item in items" :key="item.title">
                <!-- <Collapsible v-model:open="isOpen"> -->
                <Collapsible>
                    <SidebarMenuButton
                        as-child
                        :is-active="urlIsActive(item.href, page.url)"
                        :tooltip="item.title"
                    >
                        
                        <CollapsibleTrigger v-if="item.dropdownItems" asChild>
                            <span>
                                <component :is="item.icon" />
                                <span>{{ item.title }}</span>
                                <ChevronsUpDown class="h-4 w-4" />
                            </span>
                        </CollapsibleTrigger>
                        
                        <Link :href="item.href" v-else>
                            <component :is="item.icon" />
                            <span>{{ item.title }}</span>
                        </Link>

                        <CollapsibleContent>
                            <SidebarMenuItem v-for="each in item.dropdownItems" :key="item.title">
                                <SidebarMenuButton
                                    as-child
                                >
                                    <Link :href="each.href" class="ml-4">
                                        <component :is="each.icon" />
                                        <span>{{ each.title }}</span>
                                    </Link>
                                </SidebarMenuButton>
                            </SidebarMenuItem>
                        </CollapsibleContent>

                        
                    </SidebarMenuButton>
                </Collapsible>
                <!-- drop down component goes here -->
            </SidebarMenuItem>

        </SidebarMenu>
    </SidebarGroup>
</template>
