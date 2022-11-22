Nova.booting((Vue, router) => {
    console.log('route added');
    router.addRoutes([
        {
            name: 'media-library',
            path: '/media-library',
            component: require('./components/MediaLibrary'),
        },
    ]);
});
