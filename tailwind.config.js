import defaultTheme from 'tailwindcss/defaultTheme';

/** @type {import('tailwindcss').Config} */
export default {
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/**/*.blade.php',
        './resources/**/*.js',
        './resources/**/*.vue',
    ],
    theme: {
        extend: {
            fontFamily: {
                "plusJakartaSans": ['Plus Jakarta Sans', 'sans-serif']
            },
            colors: {
                primary: {
                    100: '#f4f8fb', // On Primary  // Surface Container
                    200: '#d9e6ef', // Surface High Container
                    300: '#b4cee0', // Primary Container // Surface Highest Container
                    400: '#8bb4cf',
                    500: '#659cbf',
                    600: '#4a8ab4',
                    700: '#4682a9',
                    800: '#437ca1',
                    900: '#3a6b8b',
                    DEFAULT: '#2d546e', // 1000 // Primary
                    dark: '#203c4d',     // 1100 // On Primary Container
                    darkest: '#142530',  // 1200

                    primary: '#2d546e', // Primary
                    onPrimary: '#f4f8fb',
                    primaryContainer: '#b4cee0',
                    onPrimaryContainer: '#203c4d',
                },
                // Global Secondary
                secondary: {
                    100: '#fdfdfc', // On Secondary // Background // Surface Lowest Container
                    200: '#faf9f5', // Surface Low Container
                    300: '#f2f0e7', // Surface Container
                    400: '#ebe8da', // Secondary Container // Surface High Container
                    500: '#e2dfd2', // Surface Highest Container
                    600: '#d8d5c8',
                    700: '#cbc8bb',
                    800: '#b6b3a6',
                    900: '#8e8b7f',
                    DEFAULT: '#827f73', // 1000
                    dark: '#68655a',    // 1100 // Secondary
                    darkest: '#2f2c23', // 1200 // On Secondary Container

                    secondary: '#68655a',
                    onSecondary: '#fdfdfc',
                    secondaryContainer: '#ebe8da',
                    onSecondaryContainer: '#2f2c23',
                },

                // Global Red
                red: {
                    100: '#fffcfc', // On Error
                    200: '#fff7f7',
                    300: '#feebea',
                    400: '#ffdcd8', // Error Container
                    500: '#ffcec9',
                    600: '#fdbeb8',
                    700: '#f4aaa4',
                    800: '#eb8f89',
                    900: '#dc3e42',
                    DEFAULT: '#ce2b34', // 1000
                    dark: '#cd2e36',    // 1100 // Error
                    darkest: '#64181a', // 1200 // On Error Container
                },

                error: {
                    error: '#cd2e36',
                    onError: '#fffcfc',
                    errorContainer: '#ffdcd8',
                    onErrorContainer: '#64181a',
                },

                // Global Green
                green: {
                    100: '#fbfefa', // On Success
                    200: '#f6fbf4',
                    300: '#eaf7e4',
                    400: '#dcf1d3', // Success Container
                    500: '#cce9bf',
                    600: '#b7dea5',
                    700: '#9bce83',
                    800: '#73b94f',
                    900: '#56a522',
                    DEFAULT: '#4c9817', // 1000
                    dark: '#3a7e00',    // 1100 // Success
                    darkest: '#253c19', // 1200 // On Success Container
                },

                success: {
                    success: '#3a7e00',
                    onSuccess: '#fbfefa',
                    successContainer: '#dcf1d3',
                    onSuccessContainer: '#253c19',
                },

                // Global Yellow
                yellow: {
                    100: '#fefdfb', // On Warning
                    200: '#fffae9',
                    300: '#fff2c0',
                    400: '#ffe8a4', // Warning Container
                    500: '#ffdd82',
                    600: '#ffd075',
                    700: '#edc068',
                    800: '#dba83b',
                    900: '#d5a234',
                    DEFAULT: '#c99724', // 1000
                    dark: '#9e6d00',    // 1100 // Warning
                    darkest: '#47391f', // 1200 // On Warning Container
                },

                warning: {
                    warning: '#9e6d00',
                    onWarning: '#fefdfb',
                    warningContainer: '#ffe8a4',
                    onWarningContainer: '#47391f',
                },

                // Global Neutral
                neutral: {
                    100: '#fcfcfd', // Surface Lowest Container
                    200: '#f9f9fb', // Surface Low Container
                    300: '#eff0f3',
                    400: '#eff0f3',
                    500: '#e0e1e6', // Separator
                    600: '#d8d9e0',
                    700: '#cdced7', // Placeholder // Border
                    800: '#b9bbc6',
                    900: '#8b8d98', // Disable
                    DEFAULT: '#80828d', // 1000
                    dark: '#62636c',    // 1100
                    darkest: '#1e1f24', // 1200 // Text
                },

                surface: {
                    background: '#fdfdfc',
                    primaryLowestContainer: '#fcfcfd',
                    primaryLowContainer: '#f9f9fb',
                    primaryMediumContainer: '#f4f8fb',
                    primaryHighContainer: '#d9e6ef',
                    primaryHighestContainer: '#b4cee0',
                    secondaryLowestContainer: '#fdfdfc',
                    secondaryLowContainer: '#faf9f5',
                    secondaryMediumContainer: '#f2f0e7',
                    secondaryHighContainer: '#ebe8da',
                    secondaryHighestContainer: '#e2dfd2',
                },

                label: {
                    text: '#1e1f24',
                    placeholder: '#cdced7',
                    disable: '#8b8d98',
                },

                border: {
                    border: '#cdced7',
                    separator: '#e0e1e6',
                }
            },
        },
    },
    plugins: [
        require('tailwindcss'),
        require('autoprefixer'),
    ],
};
