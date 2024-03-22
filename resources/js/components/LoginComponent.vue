<template>
    <n-form-item class="font-bold" label="Email" >
        <n-input
            round
            placeholder="Email"
            type="email"
            id="email"
            name="email"
            required
            autocomplete="email"
            autofocus
        />
    </n-form-item>

    <n-form-item class="font-bold" label="Пароль" >
        <n-input
            round
            id="password"
            type="password"
            class="form-control"
            name="password"
            required
            autocomplete="current-password"
            show-password-on="mousedown"
            placeholder="Пароль"
            :maxlength="45"
        />
    </n-form-item>
        <n-switch v-model:value="value" class="mb-3 items-center">
            <template #checked>
                Запомнить меня
            </template>
            <template #unchecked>
                Не запоминать
            </template>
        </n-switch>

</template>

<script>
export default {
    name:"LoginComponent",
    mounted() {
        function validateLogin(){
            console.log('Login mounted.')
        }

    }
}
</script>

<style>
.n-form-item-label__text{
    font-size: 16px;
    font-weight: bold;
}
</style>
