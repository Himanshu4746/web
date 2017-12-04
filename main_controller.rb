class MainController < ApplicationController
	def search_result
		@title=params[:title]
		@data=Book.find(:all,:conditions=>["title=?",@title])
	end
end
