#!/usr/bin/env ruby 

require 'rubygems'
require 'nokogiri'

Imagepath = '/Users/rick/git/avani-wordpress/public/wp-content/uploads/2009/10'

title_map = {
    'html/index.htm' => 'skip',
    'template.htm' => 'skip',
    'spnet_client/system_web/1_1_4322/SmartNav.htm' => 'skip',
    'index.htm' => 'skip',
    'about/annual.htm' => 'Annual Reports',
    'blankets/chutka.htm' => 'skip',
    'blankets/durries.htm' => 'skip',
    'blankets/merino.htm' => 'skip',
    'blankets/silkwool.htm' => 'skip',
    'blankets/thulma.htm' => 'skip',
    'cushion/felted.htm' => 'skip',
    'cushion/purewool.htm' => 'skip',
    'cushion/silkwool.htm' => 'skip',
    'farm.htm' => 'Farm Based Activities',
    'farm/organic.htm' => 'Organic Farming',
    'farm/other.htm' => 'Other Income Generating Activities',
    'farm/silk.htm' => 'Silk Cultivation',
    'garments/dresses.htm' => 'skip',
    'garments/kidsjackets.htm' => 'skip',
    'garments/kidsponchos.htm' => 'skip',
    'garments/tweeds.htm' => 'skip',
    'map.htm' => 'Map',
    'news.htm' => 'News & Events',
    'products/blankets/chutka.htm' => 'Chutkas',
    'products/blankets/durries.htm' => 'Durries',
    'products/blankets/merino.htm' => 'Merino Wool Blankets',
    'products/blankets/silkwool.htm' => 'Silk / Wool Blankets',
    'products/blankets/thulma.htm' => 'Thulmas',
    'products/cushion/felted.htm' => 'Felted and Brushed Cushion Covers',
    'products/cushion/purewool.htm' => 'Pure Wool Cushion Covers',
    'products/cushion/silkwool.htm' => 'Silk / Wool Cushion Covers',
    'products/garments/dresses.htm' => 'Silk Dresses & Capes',
    'products/garments/kidsjackets.htm' => 'Kids Jackets',
    'products/garments/kidsponchos.htm' => 'Kids Ponchos',
    'products/garments/tweeds.htm' => 'Tweed Jackets',
    'products/shawls/puremerino.htm' => 'Pure Merino Wool Shawls, Stoles & Mufflers',
    'products/shawls/puresilk.htm' => 'Pure Silk Shawls, Stoles & Mufflers',
    'products/shawls/puretibetan.htm' => 'Pure Tibetan Wool Shawls, Stoles & Mufflers',
    'products/shawls/silkwool.htm' => 'Silk / Wool Shawls, Stoles & Mufflers',
    'products/solar/driers.htm' => 'Solar Driers',
    'products/solar/laterns.htm' => 'Solar Lanterns',
    'products/solar/waterheaters.htm' => 'Solar Water Heaters',
    'renewable.htm' => 'Renewable Energy',
    'renewable/driers.htm' => 'Solar Driers',
    'renewable/photovoltaics.htm' => 'Solar Photo Voltaics',
    'renewable/pine.htm' => 'Pine Needle Gasifier',
    'renewable/waterheaters.htm' => 'Solar Water Heaters',
    'shawls/puremerino.htm' => 'skip',
    'shawls/puresilk.htm' => 'skip',
    'shawls/puretibetan.htm' => 'skip',
    'shawls/silkwool.htm' => 'skip',
    'sitemap.htm' => 'skip',
    'solar/driers.htm' => 'skip',
    'solar/laterns.htm' => 'skip',
    'solar/waterheaters.htm' => 'skip',
    'textiles/natdyes.htm' => 'Natural Dyes',
    'textiles/procprod.htm' => 'Process of Production',
    'water.htm' => 'Water Management',
    'water/rain.htm' => 'Rain Water Harvesting',
    'water/waste.htm' => 'Waste Water Recycling',
}

# get filename from command-line
file = ARGV.shift
raise "Usage:  #{$0} <filename>" if !file or file.empty?

titles = [
'About Us', 'News & Events', 'Annual Reports', 'Renewable Energy', 'Solar Water Heaters',
'Solar Photo Voltaics', 'Solar Driers', 'Pine Needle Gasifier', 'Biogas', 'Water Management',
'Rain Water Harvesting', 'Waste Water Recycling', 'Farm Based Activities', 'Silk Cultivation',
'Organic Farming', 'Other Income Generating Activities', 'Textiles', 'Crafts', 'Materials',
'Natural Dyes', 'Process of Production', 'Products', 'Shawls, Stoles & Mufflers', 'Scarves',
'Garments', 'Blankets & Throws', 'Cushion Covers', 'Carpets', 'Solar Energy',
]

title = File.basename(file).sub(/\.htm$/, '')
page_title = titles.find {|t| t.downcase == title.downcase }

unless page_title
  # find title mapping for filename
  expanded = File.expand_path(file).sub(%r{^.*public/}, '')
  page_title = title_map[expanded]
  raise "Could not find title page_title for filename [#{file}] [#{expanded}]" unless page_title
  exit 0 if page_title == 'skip'
end

# read the HTMLz
html = File.read(file)
parsed = Nokogiri::HTML.parse(html)

# now, attempt to convert images
src_images = parsed.css('.content img')

src_images.each do |image|
  image['src'] = image['src'].to_s.sub(%r{^/?(?:\.\./)*}, '/')
  filename = File.basename image['src'].to_s.gsub(/%20/, ' ')
  match = Dir[Imagepath + '/*'].find {|f| File.basename(f).downcase == filename.downcase }
  raise "(#{file}) could not find an img src match for [#{filename}] in [#{Imagepath}]" unless match
  image['src'] = "/wp-content/uploads/2009/10/#{File.basename match}"
end

links = parsed.css('.content a')

File.open('/tmp/links', 'a') do |linkfile|
  links.each do |link|
    link['href'] = link['href'].to_s.sub(%r{^/?(?:\.\./)*}, '')
    if link['href'] =~ %r{^img/}
      filename = File.basename link['href'].to_s.gsub(/%20/, ' ')
      match = Dir[Imagepath + '/*'].find {|f| File.basename(f).downcase == filename.downcase }
      raise "(#{file}) could not find an img link match for [#{filename}] in [#{Imagepath}]" unless match
      link['href'] = "/wp-content/uploads/2009/10/#{File.basename match}"
    else
      linkfile.puts "#{page_title}|#{link['href']}"
    end
  end
end

# and, finally, make the database update...
contents = parsed.css('.content').inner_html.strip

sanitized = contents.gsub(%r{'}, "''")
puts "UPDATE wp_posts set post_content = '#{sanitized}' where post_title = '#{page_title}' and post_type='page';"
