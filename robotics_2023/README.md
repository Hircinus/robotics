# Champlain College St-Lambert 2023 Robotics club website

## Installation

 1. Clone the project to a desired location (using GUI or CLI): ``git clone https://github.com/Hircinus/robotics.git``
 2. Move to the desired project in the repo (for example, choosing this project): ``cd robotics_2023``
 3. Install NPM dependencies: ``npm install && npm install -D tailwindcss postcss autoprefixer``
 4. The config file (``tailwind.config.js``) should be already complete, but if it is not found or lost, run: ``npx tailwindcss init -p`` and change the contents to:
```js
/** @type {import('tailwindcss').Config} */
module.exports = {
  content: [
      "./pages/**/*.{js,ts,jsx,tsx}",
    "./components/**/*.{js,ts,jsx,tsx}",
  ],
  theme: {
    extend: {
    },
  },
  plugins: [],
}
```
 5. Finally, run the project with: ``npm run dev`` and open it at [http://localhost:3000](http://localhost:3000) with your browser to see the result.

You can start editing the main page by modifying `pages/index.tsx`. The page auto-updates as you edit the file.

## Usage

### Grids
To use the grid component, you need to pass a column parameter.
```typescript
<Container cols={[
    {
        centered: true,
        content: <div>
            <h1>Title</h1>
            <br />
            <a href="http://linkexample">dummylink</a>
        </div>
    }
]}></Container>
```
Here you pass not only a centered parameter, but also a content parameter that is returning the html content of the grid component.

## Learn More

To learn more about Next.js, take a look at the following resources:

- [Next.js Documentation](https://nextjs.org/docs) - learn about Next.js features and API.
- [Learn Next.js](https://nextjs.org/learn) - an interactive Next.js tutorial.
