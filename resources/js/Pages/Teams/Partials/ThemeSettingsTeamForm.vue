<template>
    <jet-form-section @submitted="updateTeamSettings">
        <template #title>
            Settings
        </template>

        <template #description>
            The team's settings.
        </template>

        <template #form>
            <!-- Team Name -->
            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name" value="Title" />

                <jet-input id="title"
                           type="text"
                           class="mt-1 block w-full"
                           v-model="form.title"
                           :disabled="! permissions.canUpdateTeam" />

                <jet-input-error :message="form.errors.title" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name" value="Header" />

                <jet-input id="header"
                           type="text"
                           class="mt-1 block w-full"
                           v-model="form.header"
                           :disabled="! permissions.canUpdateTeam" />

                <jet-input-error :message="form.errors.header" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name" value="Image" />

                <jet-input id="image"
                           type="text"
                           class="mt-1 block w-full"
                           v-model="form.image"
                           :disabled="! permissions.canUpdateTeam" />

                <jet-input-error :message="form.errors.image" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name" value="Primary Color" />

                <jet-input id="primaryColor"
                           type="text"
                           class="mt-1 block w-full"
                           v-model="form.primaryColor"
                           :disabled="! permissions.canUpdateTeam" />

                <jet-input-error :message="form.errors.primaryColor" class="mt-2" />
            </div>

            <div class="col-span-6 sm:col-span-4">
                <jet-label for="name" value="Secondary Color" />

                <jet-input id="secondaryColor"
                           type="text"
                           class="mt-1 block w-full"
                           v-model="form.secondaryColor"
                           :disabled="! permissions.canUpdateTeam" />
                <jet-input-error :message="form.errors.secondaryColor" class="mt-2" />
            </div>
        </template>

        <template #actions v-if="permissions.canUpdateTeam">
            <jet-action-message :on="form.recentlySuccessful" class="mr-3">
                Saved.
            </jet-action-message>

            <jet-button :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                Save
            </jet-button>
        </template>
    </jet-form-section>
</template>

<script>
import { defineComponent } from 'vue'
import JetActionMessage from '@/Jetstream/ActionMessage'
import JetButton from '@/Jetstream/Button'
import JetFormSection from '@/Jetstream/FormSection'
import JetInput from '@/Jetstream/Input'
import JetInputError from '@/Jetstream/InputError'
import JetLabel from '@/Jetstream/Label'

export default defineComponent({
    components: {
        JetActionMessage,
        JetButton,
        JetFormSection,
        JetInput,
        JetInputError,
        JetLabel,
    },

    props: ['team', 'permissions'],

    data() {
        return {
            form: this.$inertia.form({
                image: '',
                title: '',
                header: '',
                primaryColor: '',
                secondaryColor: '',
            })
        }
    },

    methods: {
        updateTeamSettings() {
            this.form.put(route('teams.settings.update', this.team), {
                errorBag: 'updateTeamSettings',
                preserveScroll: true
            });
        },
    },
})
</script>
