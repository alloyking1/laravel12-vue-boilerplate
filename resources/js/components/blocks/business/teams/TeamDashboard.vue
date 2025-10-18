<template>
    <div>
        <div class="flex h-full flex-1 flex-col gap-4 overflow-x-auto rounded-xl p-4">
            <div class="grid auto-rows-min gap-4 md:grid-cols-3">
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
                >
                    <PlaceholderPattern />
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
                >
                    <PlaceholderPattern />
                </div>
                <div
                    class="relative aspect-video overflow-hidden rounded-xl border border-sidebar-border/70 dark:border-sidebar-border"
                >
                    <PlaceholderPattern />
                </div>
            </div>
        </div> 

        <div class="relative min-h-[100vh] flex-1 rounded-xl border border-sidebar-border/70 md:min-h-min dark:border-sidebar-border">
             <div class="p-2 flex justify-between">
                        <h2 class="text-4xl font-black mx-2">Teams Members</h2>
                        <div>
                            <!-- drawer -->
                            <div>
                                <Drawer>
                                    
                                    <DrawerTrigger class="hover:cursor-pointer">
                                        <Button>
                                            Invite Members
                                        </Button>
                                    </DrawerTrigger>
                                    <DrawerContent>
                                    <DrawerHeader>
                                        <div class="px-4 md:max-w-3xl border">
                                            <DrawerTitle>Are you absolutely sure?</DrawerTitle>
                                            <DrawerDescription>This action cannot be undone.</DrawerDescription>
                                            <div>
                                                <form action="">
                                                    <Input type="email" placeholder="Email" />
                                                </form>
                                            </div>
                                        </div>
                                    </DrawerHeader>
    
                                    <DrawerFooter>
                                        <Button>Submit</Button>
                                        <DrawerClose>
                                        <Button variant="outline">
                                            Cancel
                                        </Button>
                                        </DrawerClose>
                                    </DrawerFooter>
                                    </DrawerContent>
                                </Drawer>
                            </div>
                        </div>
                    </div>
    
                    <!-- table -->
                    <div class="mx-2">
                        <Table>
                            <TableCaption>A list of your recent invoices.</TableCaption>
                            <TableHeader>
                            <TableRow>
                                <TableHead class="w-[100px]">
                                Invoice
                                </TableHead>
                                <TableHead>Status</TableHead>
                                <TableHead>Method</TableHead>
                                <TableHead class="text-right">
                                Amount
                                </TableHead>
                            </TableRow>
                            </TableHeader>
                            <TableBody>
                            <TableRow>
                                <TableCell class="font-medium">
                                INV001
                                </TableCell>
                                <TableCell>Paid</TableCell>
                                <TableCell>Credit Card</TableCell>
                                <TableCell class="text-right">
                                $250.00
                                </TableCell>
                            </TableRow>
                            </TableBody>
                        </Table>
                    </div>
        </div>
    </div>
</template>