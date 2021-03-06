=begin
#GraphHopper Directions API

#You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.

OpenAPI spec version: 1.0.0

Generated by: https://github.com/swagger-api/swagger-codegen.git

=end

require 'spec_helper'
require 'json'

# Unit tests for SwaggerClient::SolutionApi
# Automatically generated by swagger-codegen (github.com/swagger-api/swagger-codegen)
# Please update as you see appropriate
describe 'SolutionApi' do
  before do
    # run before each test
    @instance = SwaggerClient::SolutionApi.new
  end

  after do
    # run after each test
  end

  describe 'test an instance of SolutionApi' do
    it 'should create an instact of SolutionApi' do
      expect(@instance).to be_instance_of(SwaggerClient::SolutionApi)
    end
  end

  # unit tests for get_solution
  # Return the solution associated to the jobId
  # This endpoint returns the solution of a large problems. You can fetch it with the job_id, you have been sent. 
  # @param key your API key
  # @param job_id Request solution with jobId
  # @param [Hash] opts the optional parameters
  # @return [Response]
  describe 'get_solution test' do
    it "should work" do
      # assertion here. ref: https://www.relishapp.com/rspec/rspec-expectations/docs/built-in-matchers
    end
  end

end
