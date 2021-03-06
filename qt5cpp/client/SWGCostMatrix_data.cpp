/**
 * GraphHopper Directions API
 * You use the GraphHopper Directions API to add route planning, navigation and route optimization to your software. E.g. the Routing API has turn instructions and elevation data and the Route Optimization API solves your logistic problems and supports various constraints like time window and capacity restrictions. Also it is possible to get all distances between all locations with our fast Matrix API.
 *
 * OpenAPI spec version: 1.0.0
 * 
 *
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen.git
 * Do not edit the class manually.
 */


#include "SWGCostMatrix_data.h"

#include "SWGHelpers.h"

#include <QJsonDocument>
#include <QJsonArray>
#include <QObject>
#include <QDebug>

namespace Swagger {


SWGCostMatrix_data::SWGCostMatrix_data(QString* json) {
    init();
    this->fromJson(*json);
}

SWGCostMatrix_data::SWGCostMatrix_data() {
    init();
}

SWGCostMatrix_data::~SWGCostMatrix_data() {
    this->cleanup();
}

void
SWGCostMatrix_data::init() {
    times = new QList<QList*>();
    distances = new QList<QList*>();
    info = new SWGCostMatrix_data_info();
}

void
SWGCostMatrix_data::cleanup() {
    
    if(times != nullptr) {
        QList<QList*>* arr = times;
        foreach(QList* o, *arr) {
            delete o;
        }
        delete times;
    }

    if(distances != nullptr) {
        QList<QList*>* arr = distances;
        foreach(QList* o, *arr) {
            delete o;
        }
        delete distances;
    }

    if(info != nullptr) {
        delete info;
    }
}

SWGCostMatrix_data*
SWGCostMatrix_data::fromJson(QString &json) {
    QByteArray array (json.toStdString().c_str());
    QJsonDocument doc = QJsonDocument::fromJson(array);
    QJsonObject jsonObject = doc.object();
    this->fromJsonObject(jsonObject);
    return this;
}

void
SWGCostMatrix_data::fromJsonObject(QJsonObject &pJson) {
    
    ::Swagger::setValue(&times, pJson["times"], "QList", "QList");
    
    
    ::Swagger::setValue(&distances, pJson["distances"], "QList", "QList");
    
    ::Swagger::setValue(&info, pJson["info"], "SWGCostMatrix_data_info", "SWGCostMatrix_data_info");
}

QString
SWGCostMatrix_data::asJson ()
{
    QJsonObject* obj = this->asJsonObject();
    
    QJsonDocument doc(*obj);
    QByteArray bytes = doc.toJson();
    return QString(bytes);
}

QJsonObject*
SWGCostMatrix_data::asJsonObject() {
    QJsonObject* obj = new QJsonObject();
    
    QJsonArray timesJsonArray;
    toJsonArray((QList<void*>*)times, &timesJsonArray, "times", "QList");
    obj->insert("times", timesJsonArray);

    QJsonArray distancesJsonArray;
    toJsonArray((QList<void*>*)distances, &distancesJsonArray, "distances", "QList");
    obj->insert("distances", distancesJsonArray);

    toJsonValue(QString("info"), info, obj, QString("SWGCostMatrix_data_info"));

    return obj;
}

QList<QList<qint64>*>*
SWGCostMatrix_data::getTimes() {
    return times;
}
void
SWGCostMatrix_data::setTimes(QList<QList<qint64>*>* times) {
    this->times = times;
}

QList<QList<double>*>*
SWGCostMatrix_data::getDistances() {
    return distances;
}
void
SWGCostMatrix_data::setDistances(QList<QList<double>*>* distances) {
    this->distances = distances;
}

SWGCostMatrix_data_info*
SWGCostMatrix_data::getInfo() {
    return info;
}
void
SWGCostMatrix_data::setInfo(SWGCostMatrix_data_info* info) {
    this->info = info;
}



} /* namespace Swagger */

