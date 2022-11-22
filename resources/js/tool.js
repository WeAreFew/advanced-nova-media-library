import Tool from './components/Tool';

Nova.booting((Vue, router) => {
    router.addRoutes([
        {
            name: 'media-library',
            path: '/media-library',
            component: Tool,
        },
    ]);
});
