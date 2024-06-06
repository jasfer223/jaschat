<script setup>
    import { Button } from '@/shadcn/ui/button';
    import '/resources/css/loader.css';
    import { useForm } from '@inertiajs/vue3';

    const form = useForm({});

    const submit = () => {
        form.post(route('logout'));
    };

</script>

<template>
    <Head title="Home" />
    <div class="flex flex-col items-center justify-center h-screen">
        <h1 class="font-bold text-center">Welcome to Jaschat {{ $page.props.auth.user.first_name }} {{ $page.props.auth.user.last_name }}</h1>
        <form @submit.prevent="submit">
            <Button type="submit" class="w-full" :disabled="form.processing">
                <div v-if="form.processing" class="w-6 h-full me-3">
                    <span class="w-full h-full loader"></span>
                </div>
                Logout
            </Button>
        </form>
    </div>
</template>
