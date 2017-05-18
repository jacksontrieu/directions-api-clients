# coding: utf-8

"""
    GraphHopper Directions API

    With the GraphHopper Directions API you get reliable and fast web services for routing and more with world wide coverage. We offer A-to-B routing via the Routing API optionally with turn instructions and elevation data as well as route optimization with various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API. 

    OpenAPI spec version: 1.0.0
    
    Generated by: https://github.com/swagger-api/swagger-codegen.git
"""


from pprint import pformat
from six import iteritems
import re


class Request(object):
    """
    NOTE: This class is auto generated by the swagger code generator program.
    Do not edit the class manually.
    """
    def __init__(self, vehicles=None, vehicle_types=None, services=None, shipments=None, relations=None, algorithm=None, objectives=None, cost_matrices=None):
        """
        Request - a model defined in Swagger

        :param dict swaggerTypes: The key is attribute name
                                  and the value is attribute type.
        :param dict attributeMap: The key is attribute name
                                  and the value is json key in definition.
        """
        self.swagger_types = {
            'vehicles': 'list[Vehicle]',
            'vehicle_types': 'list[VehicleType]',
            'services': 'list[Service]',
            'shipments': 'list[Shipment]',
            'relations': 'list[Relation]',
            'algorithm': 'Algorithm',
            'objectives': 'list[Objective]',
            'cost_matrices': 'list[CostMatrix]'
        }

        self.attribute_map = {
            'vehicles': 'vehicles',
            'vehicle_types': 'vehicle_types',
            'services': 'services',
            'shipments': 'shipments',
            'relations': 'relations',
            'algorithm': 'algorithm',
            'objectives': 'objectives',
            'cost_matrices': 'cost_matrices'
        }

        self._vehicles = vehicles
        self._vehicle_types = vehicle_types
        self._services = services
        self._shipments = shipments
        self._relations = relations
        self._algorithm = algorithm
        self._objectives = objectives
        self._cost_matrices = cost_matrices

    @property
    def vehicles(self):
        """
        Gets the vehicles of this Request.
        An array of vehicles that can be employed

        :return: The vehicles of this Request.
        :rtype: list[Vehicle]
        """
        return self._vehicles

    @vehicles.setter
    def vehicles(self, vehicles):
        """
        Sets the vehicles of this Request.
        An array of vehicles that can be employed

        :param vehicles: The vehicles of this Request.
        :type: list[Vehicle]
        """

        self._vehicles = vehicles

    @property
    def vehicle_types(self):
        """
        Gets the vehicle_types of this Request.
        An array of vehicle types

        :return: The vehicle_types of this Request.
        :rtype: list[VehicleType]
        """
        return self._vehicle_types

    @vehicle_types.setter
    def vehicle_types(self, vehicle_types):
        """
        Sets the vehicle_types of this Request.
        An array of vehicle types

        :param vehicle_types: The vehicle_types of this Request.
        :type: list[VehicleType]
        """

        self._vehicle_types = vehicle_types

    @property
    def services(self):
        """
        Gets the services of this Request.
        An array of services

        :return: The services of this Request.
        :rtype: list[Service]
        """
        return self._services

    @services.setter
    def services(self, services):
        """
        Sets the services of this Request.
        An array of services

        :param services: The services of this Request.
        :type: list[Service]
        """

        self._services = services

    @property
    def shipments(self):
        """
        Gets the shipments of this Request.
        An array of shipments

        :return: The shipments of this Request.
        :rtype: list[Shipment]
        """
        return self._shipments

    @shipments.setter
    def shipments(self, shipments):
        """
        Sets the shipments of this Request.
        An array of shipments

        :param shipments: The shipments of this Request.
        :type: list[Shipment]
        """

        self._shipments = shipments

    @property
    def relations(self):
        """
        Gets the relations of this Request.
        An array of relations

        :return: The relations of this Request.
        :rtype: list[Relation]
        """
        return self._relations

    @relations.setter
    def relations(self, relations):
        """
        Sets the relations of this Request.
        An array of relations

        :param relations: The relations of this Request.
        :type: list[Relation]
        """

        self._relations = relations

    @property
    def algorithm(self):
        """
        Gets the algorithm of this Request.

        :return: The algorithm of this Request.
        :rtype: Algorithm
        """
        return self._algorithm

    @algorithm.setter
    def algorithm(self, algorithm):
        """
        Sets the algorithm of this Request.

        :param algorithm: The algorithm of this Request.
        :type: Algorithm
        """

        self._algorithm = algorithm

    @property
    def objectives(self):
        """
        Gets the objectives of this Request.
        An array of objectives

        :return: The objectives of this Request.
        :rtype: list[Objective]
        """
        return self._objectives

    @objectives.setter
    def objectives(self, objectives):
        """
        Sets the objectives of this Request.
        An array of objectives

        :param objectives: The objectives of this Request.
        :type: list[Objective]
        """

        self._objectives = objectives

    @property
    def cost_matrices(self):
        """
        Gets the cost_matrices of this Request.
        An array of cost matrices

        :return: The cost_matrices of this Request.
        :rtype: list[CostMatrix]
        """
        return self._cost_matrices

    @cost_matrices.setter
    def cost_matrices(self, cost_matrices):
        """
        Sets the cost_matrices of this Request.
        An array of cost matrices

        :param cost_matrices: The cost_matrices of this Request.
        :type: list[CostMatrix]
        """

        self._cost_matrices = cost_matrices

    def to_dict(self):
        """
        Returns the model properties as a dict
        """
        result = {}

        for attr, _ in iteritems(self.swagger_types):
            value = getattr(self, attr)
            if isinstance(value, list):
                result[attr] = list(map(
                    lambda x: x.to_dict() if hasattr(x, "to_dict") else x,
                    value
                ))
            elif hasattr(value, "to_dict"):
                result[attr] = value.to_dict()
            elif isinstance(value, dict):
                result[attr] = dict(map(
                    lambda item: (item[0], item[1].to_dict())
                    if hasattr(item[1], "to_dict") else item,
                    value.items()
                ))
            else:
                result[attr] = value

        return result

    def to_str(self):
        """
        Returns the string representation of the model
        """
        return pformat(self.to_dict())

    def __repr__(self):
        """
        For `print` and `pprint`
        """
        return self.to_str()

    def __eq__(self, other):
        """
        Returns true if both objects are equal
        """
        if not isinstance(other, Request):
            return False

        return self.__dict__ == other.__dict__

    def __ne__(self, other):
        """
        Returns true if both objects are not equal
        """
        return not self == other