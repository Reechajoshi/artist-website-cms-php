new TWTR.Widget({
version: 2,
type: 'profile',
rpp: 3,
interval: 30000,
width: 'auto',
height: 'auto',
theme: {
shell: {
background: '#0b0b0b',
color: '#dbdbdb'
},
tweets: {
background: '#0b0b0b',
color: '#dbdbdb',
links: '#bababa'
}
},
features: {
scrollbar: false,
loop: true,
live: true,
hashtags: true,
timestamp: true,
avatars: false,
behavior: 'all'
}
}).render().setUser('fridaymoviez').start();