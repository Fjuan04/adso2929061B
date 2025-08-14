tailwind.config = {
      theme: {
        fontFamily: {
          sans: ['Inter', 'sans-serif'],
        },
        extend: {
          colors: {
            coffee: {
              50: '#f8f5f2',
              100: '#f0eae2',
              200: '#d9c8b3',
              300: '#c2a685',
              400: '#ab8357',
              500: '#8b5a2b',
              600: '#704926',
              700: '#553820',
              800: '#3a2719',
              900: '#1f1613',
            },
            accent: {
              green: '#4caf50',
              red: '#f44336',
              blue: '#2196f3'
            }
          },
          boxShadow: {
            'soft': '0 4px 14px 0 rgba(0, 0, 0, 0.08)',
            'hard': '0 4px 20px 0 rgba(0, 0, 0, 0.12)'
          }
        }
      }
    }