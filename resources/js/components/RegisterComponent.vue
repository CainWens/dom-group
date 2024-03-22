<template>

    <n-form-item class="font-bold" label="Имя" >
        <n-input
            round
            placeholder="Имя"
            type="text"
            id="name"
            name="name"
            required
            autocomplete="name"
            autofocus

        />
    </n-form-item>

    <n-form-item class="font-bold" label="Email" >
        <n-input
            round
            placeholder="Email"
            type="email"
            id="email"
            name="email"
            required
            autocomplete="email"

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

    <n-form-item class="font-bold" label="Повторите пароль" >
        <n-input
            round
            id="password-confirm"
            type="password"
            class="form-control"
            name="password_confirmation"
            required
            show-password-on="mousedown"
            placeholder="Повторите пароль"
            :maxlength="45"
        />
    </n-form-item>

</template>

<script>

</script>

<style>
.n-form-item-label__text{
    font-size: 16px;
    font-weight: bold;
}
</style>
