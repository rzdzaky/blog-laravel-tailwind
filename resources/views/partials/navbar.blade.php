<nav class="w-full fixed h-[60px] flex bg-white items-center sm:px-14 md:px-24 lg:px-40 xl:px-64 px-3 justify-between border-b-[1px] border-slate-300">
  <h1 class="flex items-center h-full text-3xl font-extrabold">My Blog.</h1>
  <ul class="h-full min-w-[230px] flex items-center justify-between text-2xl">
    <li><a href="/" class="{{ $title === "Home" ? 'font-semibold' : "" }}">Home</a></li>
    <li><a href="/posts" class="{{ $title === "Posts" ? 'font-semibold' : "" }}">Blog</a></li>
    <li><a href="/about" class="{{ $title === "About" ? 'font-semibold' : "" }}">About</a></li>
  </ul>
</nav>