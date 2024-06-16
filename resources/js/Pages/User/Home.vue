<script setup>
    import { Button } from '@/shadcn/ui/button';
    import '/resources/css/loader.css';
    import { useForm } from '@inertiajs/vue3';
    import { Input } from '@/shadcn/ui/input';
    import {
        Card,
        CardContent,
        CardDescription,
        CardFooter,
        CardHeader,
        CardTitle,
    } from '@/shadcn/ui/card';

    const logoutForm = useForm({});

    const logoutSubmit = () => {
        logoutForm.post(route('logout'));
    };

    // const props = defineProps({
    //     'name': String,
    // });

</script>

<template>
    <Head title="Home" />
    <div class="flex flex-col items-center justify-center h-screen bg-gray-200">
        <!-- <h1>{{ props.name }}</h1> -->
        <Card>
            <CardContent>
                <div class="flex justify-between pt-6 align-middle">
                    <div class="flex flex-col justify-between me-12">
                        <div>
                            <h1 class="font-bold">{{ $page.props.auth.user.first_name }} {{ $page.props.auth.user.last_name }}</h1>
                            <h1 class="font-semibold">{{ $page.props.auth.user.email }}</h1>
                        </div>
                        <div>
                            <form @submit.prevent="logoutSubmit">
                                <Button type="submit" class="w-1/2" :disabled="logoutForm.processing">
                                    <div v-if="logoutForm.processing" class="w-6 h-full me-3">
                                        <span class="w-full h-full loader"></span>
                                    </div>
                                    Logout
                                </Button>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="w-[600px]">
                            <div class="flex w-full">
                                <Input class="me-2" type="email" placeholder="Search email" />
                                <Button >Chat</Button>
                            </div>
                            <div>
                                <div class="h-[250px] p-4 flex flex-col overflow-y-auto">
                                    <div><span class="font-bold">Jasper:</span> Hello</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Hello</div>
                                    <div><span class="font-bold">Jasper:</span> Gaunsa ka?</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Ga code</div>
                                    <div><span class="font-bold">Jasper:</span> Hello</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Hello</div>
                                    <div><span class="font-bold">Jasper:</span> Gaunsa ka?</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Ga code</div>
                                    <div><span class="font-bold">Jasper:</span> Hello</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Hello</div>
                                    <div><span class="font-bold">Jasper:</span> Gaunsa ka?</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Ga code</div>
                                    <div><span class="font-bold">Jasper:</span> Hello</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Hello</div>
                                    <div><span class="font-bold">Jasper:</span> Gaunsa ka?</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Ga code</div>
                                    <div><span class="font-bold">Jasper:</span> Hello</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Hello</div>
                                    <div><span class="font-bold">Jasper:</span> Gaunsa ka?</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Ga code</div>
                                    <div><span class="font-bold">Jasper:</span> Hello</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Hello</div>
                                    <div><span class="font-bold">Jasper:</span> Gaunsa ka?</div>
                                    <div class="text-right"><span class="font-bold">You:</span> Ga code</div>
                                </div>
                                <div class="flex w-full">
                                    <Input class="me-2" type="email" placeholder="Enter message" />
                                    <Button >Send</Button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </CardContent>
        </Card>
    </div>
</template>
