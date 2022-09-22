## Grids
To use the grid component, you need to pass a column parameter.
```typescript
let cols_temp = [
    {
        centered: true,
        content: <div>
            <h1>Title</h1>
            <br />
            <a href="http://linkexample">dummylink</a>
        </div>
    }
]
```
Here you pass not only a centered parameter, but also a content parameter that is returning the html content of the grid component.


## Getting Started

First, run the development server:

```bash
npm run dev
# or
yarn dev
```

Open [http://localhost:3000](http://localhost:3000) with your browser to see the result.

You can start editing the page by modifying `pages/index.tsx`. The page auto-updates as you edit the file.


## Learn More

To learn more about Next.js, take a look at the following resources:

- [Next.js Documentation](https://nextjs.org/docs) - learn about Next.js features and API.
- [Learn Next.js](https://nextjs.org/learn) - an interactive Next.js tutorial.
