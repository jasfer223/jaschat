<script setup>
    import {
        Card,
        CardContent,
        CardDescription,
        CardFooter,
        CardHeader,
        CardTitle,
    } from '@/shadcn/ui/card';
    import { Input } from '@/shadcn/ui/input';
    import { Button } from '@/shadcn/ui/button';
    import '/resources/css/loader.css';
    // import { reactive } from 'vue';
    import { useForm } from '@inertiajs/vue3';

    const form = useForm({
        email: null,
        password: null,
    });

    const submit = () => {
        form.post(route('login'), {
            onError: () => form.reset("password"),
        });
    };

</script>
<template>
    <Head title="Login" />
    <div class="flex flex-col items-center justify-center h-screen bg-gray-200">
        <img class="h-[50px] w-[50px] mb-5" src="/public/jaschat-logo-black.png" alt="Jaschat Logo">
        <Card class="w-[420px]">
            <form @submit.prevent="submit">
                <CardContent class="mt-7">
                    <div class="mb-4">
                        <Input type="email" placeholder="Email" v-model="form.email"  :class="{ 'border-red-500': form.errors.email }" />
                        <small v-if="form.errors.email" class="text-sm text-red-600 ms-1">{{ form.errors.email }}</small>
                    </div>
                    <div>
                        <Input type="password" placeholder="Password" v-model="form.password"  :class="{ 'border-red-500': form.errors.password }"/>
                        <small v-if="form.errors.password" class="text-sm text-red-600 ms-1">{{ form.errors.password }}</small>
                    </div>
                </CardContent>
                <CardFooter class="flex flex-col">
                    <Button type="submit" class="w-full" :disabled="form.processing">
                        <div v-if="form.processing" class="w-6 h-full me-3">
                            <span class="w-full h-full loader"></span>
                        </div>
                        Log In
                    </Button>
                    <div class="flex justify-between w-full px-2 mt-3">
                        <Link :href="route('show-registration-form')" class="text-sm text-gray-500 hover:underline hover:text-black">Don't have an account?</Link>
                        <Link href="#" class="text-sm text-gray-500 hover:underline hover:text-black">Forgot Password?</Link>
                    </div>
                </CardFooter>
            </form>
          </Card>
    </div>
</template>
