require 'capistrano/ext/multistage'
set :stages, %w(production testing)

set :application, "frontend"

set :repository,  "git://github.com/memibeltrame/Frontendconf.git"
set :scm,         :git

set  :keep_releases,  3