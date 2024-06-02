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
    <div class="h-screen flex justify-center items-center bg-gray-200">
        <Card class="w-[420px]">
            <CardHeader>
              <CardTitle class="text-center">Jaschat</CardTitle>
              <!-- <CardDescription>Enter your account information to log in to <span class="font-bold">Jaschat</span></CardDescription> -->
            </CardHeader>
            <form action="" method="POST">
                <CardContent>
                    <Input type="email" placeholder="Email" class="mb-4"/>
                    <Input type="password" placeholder="Password"/>
                    <div class="flex justify-end mt-2">
                        <a href="#" class="hover:underline text-sm">Forgot Password?</a>
                    </div>
                </CardContent>
                <CardFooter>
                <Button type="submit" class="w-full">Log In</Button>
                </CardFooter>
            </form>
          </Card>
    </div>
</template>
