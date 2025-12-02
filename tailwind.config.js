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
                    DEFAULT: '#0D3C65', // Dark Blue (Header, Buttons)
                    hover: '#0B3254',   // Darker shade for hover
                },
                secondary: {
                    DEFAULT: '#008B8C', // Teal (Accents, Icons)
                    hover: '#007273',   // Darker teal for hover
                },
                accent: {
                    DEFAULT: '#027752', // Green (Laurel leaves)
                },
                neutral: {
                    light: '#F7FAFC',   // Light Background
                    grey: '#6E7C8D',    // Secondary Text
                    dark: '#2E3A4C',    // Body Text
                },
            },
            fontFamily: {
                heading: ['Poppins', 'sans-serif'],
                body: ['Open Sans', 'sans-serif'],
            },
            container: {
                center: true,
                padding: {
                    DEFAULT: '1rem',
                    sm: '2rem',
                    lg: '4rem',
                    xl: '5rem',
                },
            },
        },
    },
    plugins: [
        require('@tailwindcss/forms'),
    ],
};