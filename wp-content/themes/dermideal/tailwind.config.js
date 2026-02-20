/** @type {string[]} */

const contentPaths = [
	'App/**/*.php',
	'assets/src/**/*.{js,jsx,ts,html}'
];

module.exports = {
  content: contentPaths,
  theme: {
    extend: {
		keyframes: {
			appearFromCenter: {
				'0%': { opacity: '0', transform: 'scale(0.5)' },
				'100%': { opacity: '1', transform: 'scale(1)' },
			},
		},
		boxShadow:{
			'custom-shadow':'0px 2px 24px 0px #1B25591A'
		},
		padding: {
			'safe': 'env(safe-area-inset-bottom)'
		},
		animation: {
			appearFromCenter: 'appearFromCenter 0.8s ease-out forwards',
		},
		width: {
			'calc-100-320': 'calc(100% - 320px)',
		},
		height:{
			'calc-100-110': 'calc(100vh - 110px)',
		},
		top:{
			'calc-1/2-60': 'calc(50% - 60px)'
		},
		fontSize: {
			'xs': '0.75rem',// 12px
			'sm': '0.875rem',//14px
			'base': '1rem', //16px
			'lg': '1.125rem', // 18px
			'xl': '1.25rem', //~20px
			'2xl': '1.563rem',//~25px
			'3xl': '1.953rem',
			'4xl': '2.441rem',
			'5xl': '3.052rem',
		},
		screens: {
			'xsm': '320px',
			'xm' : '375px',
			'xmm' : '390px',
			'xs': '480px',
			'smx': '600px',
			'sm': '640px',
			'md': '768px',
			'mdx': '991px',
			'lg': '1024px',
			'lgx': '1199px',
			'lgxm': {'max':'1199px'},
			'l': '1200px',
			'xl': '1280px',
			'1xl': '1366px',
			'2xl': '1440px',
			'3xl':'1600px',
			'4xl': '1920px'
		},
		colors: {
			'brand':{
				DEFAULT:'#325956',
				'hover':'rgb(34,63,60)',
				'light':'#bdc7a2',
				'beige':'#f6f2d3',
				'gold':'#db9b3c',
				'light-orange':'#f1ded1',
				'light-purple':'#edc8e5',
				'purple':'#7d318a',
				'purple-hover':'#4c1b62',
				'light-green':'#c8d1af',
				'yellow-green':'#a39135',
				'yellow-green-dark':'#9b8f2230',
				'green':'#577270'

			},
			transparent:'transparent',
			current:'currentColor',
			'error': '#ED0703',
			'white':'#ffffff',
			'half-white':'rgba(255,255,255,0.69)',
			'light-gray':'#ACACAC',
			'light-blue':'#EFF5FD',
			'dark-blue':'#04122C',
			'gray-border':'#17171714',
			'dark-border':'#010d2121',

			'light-gray-hover':'#EBEBEB',
			'semi-light-gray':'#FAFAFA',
			'gray':'#E2E2E2',
			'semi-dark-gray':'#E0E0E0',
			'dark-gray':'#CDCACA',
			'deep-dark-gray':'#595959',
			'deep-gray':'#888888',


			'brown':'#74747B',
			'black':'#040304',
			'black-hover':'#3C3C3C',
			'lite-black':'#252525',
			'black-50':'rgba(25, 22, 29, 1)',
			'yellow':'rgba(255, 184, 0, 1)',
			'yellow-50':'#FFFBEB',
			'yellow-600':'#D97706',
			'orange':'#d56c0d',
			'green':'rgba(14, 170, 0, 1)',
			'green-50':'#EFFDF4',
			'green-100':'#dcfce7',
			'green-500':'#22c55e',
			'green-600':'#17A34A',
			'green-700':'#15803d',
			'green-800':'#166534',
			'orange-100':'#ffedd5',
			'orange-600':'#ea580c',
			'orange-700':'#c2410c',
			'amber-100':'#fef3c7',
			'amber-600':'#d97706',
			'amber-700':'#b45309',
			'red':'rgba(217, 0, 0, 1)',
			'red-50':'#FEF2F2',
			'red-100':'#fee2e2',
			'red-200': '#d900001a',
			'red-400':'#f87171',
			'red-500':'#ef4444',
			'red-600':'#DC2625',
			'red-700':'#B91C1C',
			'red-800':'#991b1b',
			'red-900':'rgba(127, 29, 29, 1)',
			'gray-50':'#f9fafb',
			'gray-100':'#f3f4f6',
			'gray-200':'#e5e7eb',
			'gray-300':'rgba(228, 233, 242, 1)',
			'gray-400':'rgba(156, 163, 175, 1)',
			'gray-500':'rgba(107, 114, 128, 1)',
			'gray-600':'#4B5563',
			'gray-700':'rgb(55, 65, 81)',
			'gray-900':'rgba(17, 24, 39, 1)',
			'light-grey':'#7C7C7C',
			'slate-50':'#f8fafc',
			'slate-100':'#f1f5f9',
			'slate-150':'rgba(247, 249, 252, 1)',
			'slate-200':'#e2e8f0',
			'slate-300':'#CBD5E1',
			'slate-400':'#94a3b8',
			'slate-500':'#64748b',
			'slate-800':'rgb(30 41 59)',

			'blue-50':'#eff6ff',
			'blue-100':'#dbeafe',
			'blue-200':'#bfdbfe',
			'blue-300':'#93c5fd',
			'blue-500':'#3b82f6',
			'blue-600':'#2563eb',
			'blue-700':'#1d4ed8',
			'blue-800':'#1e40af',
			'blue-900':'#1e3a8a',
			'sky-500': '#0ea5e9',

			'cyan-50': '#ecfeff',
			'cyan-100': '#cffafe',
			'cyan-200': '#a5f3fc',
			'cyan-300': '#67e8f9',
			'cyan-400': '#22d3ee',
			'cyan-500': '#06b6d4',
			'cyan-600': '#0891b2',
			'cyan-700': '#0e7490',
			'cyan-800': '#155e75',
			'cyan-900': '#164e63',
		},
	},
  },
  plugins: [
	  require('@tailwindcss/typography'),
	  require('tailwindcss-content-visibility'),
	  require('@tailwindcss/line-clamp'),
  ],
  corePlugins: {
	  tableLayout: true,
  },
}
