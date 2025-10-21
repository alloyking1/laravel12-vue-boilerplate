<script setup  lang="ts">
import {Empty,EmptyContent,EmptyDescription,EmptyHeader,EmptyMedia,EmptyTitle,} from '@/components/ui/empty'
import { FolderOpen } from 'lucide-vue-next'
import { Button } from "@/components/ui/button"
import { Drawer, DrawerClose, DrawerContent, DrawerDescription, DrawerFooter, DrawerHeader, DrawerTitle, DrawerTrigger } from '@/components/ui/drawer';
import { Input } from "@/components/ui/input"
import { Label } from "@/components/ui/label"

// const for

</script>

<template>
    <div class="">
        <div class="h-screen flex items-center justify-center">
            <Empty>
                <EmptyHeader>
                <EmptyMedia variant="icon">
                    <FolderOpen />
                </EmptyMedia>
                <EmptyTitle>You do not Have a team</EmptyTitle>
                <EmptyDescription>You can create a team using the button below</EmptyDescription>
                </EmptyHeader>
                <EmptyContent>
                <Drawer>
                    <DrawerTrigger class="hover:cursor-pointer">
                        <Button>
                            Create a team
                        </Button>
                    </DrawerTrigger>

                    <DrawerContent>
                        <div class="mx-auto w-full max-w-sm">
                    
                            
                            <DrawerHeader class="p-0 pb-4 py-2">
                                <DrawerTitle>Move Goal</DrawerTitle>
                                <DrawerDescription>Set your daily activity goal.</DrawerDescription>
                            </DrawerHeader>
                            
                            <div>
                                <form class="grid items-start gap-4">
                                    <div class="grid gap-2">
                                        <Label html-for="name">Email</Label>
                                        <Input id="name" type="text" placeholder="Enter your team name" />
                                    </div>
                                    <div class="grid gap-2">
                                        <Label html-for="username">Username</Label>
                                        <Input id="username" default-value="@shadcn" />
                                    </div>
                                    <Button type="submit" class="">
                                        Save changes
                                    </Button>
                                </form>
                            </div>

                            <DrawerFooter>
                                <!-- <Button>Submit</Button> -->
                                <!-- <DrawerClose>
                                    <Button variant="outline" class="w-full">
                                        Cancel
                                    </Button>
                                </DrawerClose> -->
                            </DrawerFooter>
                        </div>
                    </DrawerContent>
                </Drawer>
                </EmptyContent>
            </Empty>

        </div>
    </div>
</template>