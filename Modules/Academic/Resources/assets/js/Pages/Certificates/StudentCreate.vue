<script setup>
import AppLayout from "@/Layouts/Vristo/AppLayout.vue";
import StudentCertificateForm from './Partials/StudentCertificateForm.vue';
import { Link } from '@inertiajs/vue3';
import { faTrashAlt } from "@fortawesome/free-solid-svg-icons";

const props = defineProps({
    student:{
        type: Object,
        default : () => ({})
    },
    courses:{
        type: Object,
        default : () => ({})
    },
    certificates:{
        type: Object,
        default : () => ({})
    },
    P000016: {
        type: String,
        default: null
    }
});

</script>

<template>
    <AppLayout title="Crear Certificado">
        <ul class="flex space-x-2 rtl:space-x-reverse">
            <li>
                <a href="javascript:;" class="text-primary hover:underline">Académico</a>
            </li>
            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                <Link :href="route('aca_students_list')" class="text-primary hover:underline">Estudiantes</Link>
            </li>
            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                <Link :href="route('aca_students_edit', student.id)" class="text-primary hover:underline">{{ student.person.full_name  }}</Link>
            </li>
            <li class="before:content-['/'] ltr:before:mr-1 rtl:before:ml-1">
                <span>Certificados</span>
            </li>
        </ul>
        <div class="pt-5">
            <StudentCertificateForm
                :faTrashAlt="faTrashAlt"
                :certificates="certificates"
                :student="student"
                :courses="courses"
                :P000016="P000016"
            />
        </div>
    </AppLayout>
</template>
