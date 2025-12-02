import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            colors: {
                primary: {
                    DEFAULT: '#0D3C65', // Dark Blue
                    hover: '#0B3254',
                },
                secondary: {
                    DEFAULT: '#008B8C', // Teal
                    hover: '#007273',
                },
                accent: {
                    DEFAULT: '#027752', // Green
                },
                neutral: {
                    light: '#F7FAFC',
                    grey: '#6E7C8D',
                    dark: '#2E3A4C',
                },
            },
            fontFamily: {
                heading: ['Poppins', 'sans-serif'],
                body: ['Open Sans', 'sans-serif'],
            },
            container: {
                center: true,
                padding: '1rem',
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};