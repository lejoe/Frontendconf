load 'deploy' if respond_to?(:namespace) # cap2 differentiator
Dir['plugins/*/lib/recipes/*.rb'].each { |plugin| load(plugin) }
load Gem.required_location('capifony', 'symfony1.rb')
load 'config/deploy'