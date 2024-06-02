<script setup>
    import {
        Card,
        CardContent,
        CardDescription,
        CardFooter,
        CardHeader,
        CardTitle,
    } from '@/shadcn/ui/card'
    import { Input } from '@/shadcn/ui/input'
    import { Button } from '@/shadcn/ui/button'

</script>
<template>
    <Head title="Registration" />
    <div class="flex flex-col items-center justify-center h-screen bg-gray-200">
        <img class="h-[50px] w-[50px] mb-5" src="/public/jaschat-logo-black.png" alt="Jaschat Logo">
        <Card class="w-[420px]">
            <!-- <CardHeader>
              <CardTitle class="text-center">Jaschat Registration</CardTitle>
              <CardDescription>Enter your account information to log in</CardDescription>
            </CardHeader> -->
            <form action="" method="POST">
                <CardContent class="mt-7">
                    <Input type="text" placeholder="First Name" class="mb-4"/>
                    <Input type="text" placeholder="Middle Name (Optional)" class="mb-4"/>
                    <Input type="text" placeholder="Last Name" class="mb-4"/>
                    <Input type="text" placeholder="Extension Name (Optional)" class="mb-4"/>
                    <Input type="email" placeholder="Email" class="mb-4"/>
                    <Input type="password" placeholder="Password" class="mb-4"/>
                    <Input type="password" placeholder="Confirm Password"/>
                </CardContent>
                <CardFooter class="flex flex-col">
                    <Button type="submit" class="w-full">Register</Button>
                    <div class="flex justify-start w-full px-2 mt-3">
                        <Link :href="route('show-login-form')" class="text-sm text-gray-500 hover:underline hover:text-black">Already have an account?</Link>
                    </div>
                </CardFooter>
            </form>
          </Card>
    </div>
</template>
