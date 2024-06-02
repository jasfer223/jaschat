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
    import '/resources/css/loader.css'
</script>
<template>
    <Head title="Login" />
    <div class="flex flex-col items-center justify-center h-screen bg-gray-200">
        <img class="h-[50px] w-[50px] mb-5" src="/public/jaschat-logo-black.png" alt="Jaschat Logo">
        <Card class="w-[420px]">
            <!-- <CardHeader>
              <CardTitle class="text-center">Jaschat Login</CardTitle>
              <CardDescription>Enter your account information to log in</CardDescription>
            </CardHeader> -->
            <!-- <form action="" method="POST"> -->
                <CardContent class="mt-7">
                    <div class="mb-4">
                         <Input type="email" placeholder="Email" />
                        <p class="hidden mt-1 text-sm text-red-600 ms-1">Email field is required</p>
                    </div>
                    <div>
                        <Input type="password" placeholder="Password"/>
                        <p class="hidden mt-1 text-sm text-red-600 ms-1">Passowrd field is required</p>
                    </div>
                </CardContent>
                <CardFooter class="flex flex-col">
                    <Button type="submit" class="w-full">
                        <!-- <div class="w-6 h-full me-3">
                            <span class="w-full h-full loader"></span>
                        </div> -->
                        Log In
                    </Button>
                    <div class="flex justify-between w-full px-2 mt-3">
                        <Link :href="route('show-registration-form')" class="text-sm text-gray-500 hover:underline hover:text-black">Don't have an account?</Link>
                        <Link href="#" class="text-sm text-gray-500 hover:underline hover:text-black">Forgot Password?</Link>
                    </div>
                </CardFooter>
            <!-- </form> -->
          </Card>
    </div>
</template>
