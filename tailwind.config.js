module.exports = {
  content: ["*"],
  theme: {
    extend: {
      backgroundImage: {
        "hero-pattern": "url('./Vector 2.svg')",
      },
      animation: {
        wiggle: "wiggle 1s linear infinite",
      },
      keyframes: {
        wiggle: {
          "0%, 100%": { transform: "rotate(-3deg)" },
          "50%": { transform: "rotate(3deg)" },
        },
      },
    },
  },
  variants: {
    extend: {
      display: ["group-hover"],
    },
  },
  plugins: [],
};
