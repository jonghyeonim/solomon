# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'probabilistic.ui'
#
# Created by: PyQt4 UI code generator 4.11.4
#
# WARNING! All changes made in this file will be lost!

import sip
import sys
import math
from PyQt4 import QtGui, QtCore, QtGui
from PyQt4.QtGui import *

class Probabilistic(QtGui.QWidget):
    def __init__(self):
        super(Probabilistic, self).__init__()

        self.setupUi()
        self.show()

    def setupUi(self):
        #self.setObjectName("Form")
        font = QtGui.QFont()
        font.setPointSize(25)

        self.resize(878, 560)
        self.label_Model = QtGui.QLabel(self)
        self.label_Model.setGeometry(QtCore.QRect(20, 10, 400, 31))
        self.label_Model.setObjectName("label_Model")
        self.label_Model.setFont(font)
        self.groupModel = QtGui.QGroupBox(self)
        self.groupModel.setGeometry(QtCore.QRect(20, 50, 151, 71))
        self.groupModel.setObjectName("groupModel")
        self.rb_EOI = QtGui.QRadioButton(self.groupModel)
        self.rb_EOI.setGeometry(QtCore.QRect(20, 30, 51, 16))
        self.rb_EOI.setObjectName("rb_EOI")
        self.rb_EOQ = QtGui.QRadioButton(self.groupModel)
        self.rb_EOQ.setGeometry(QtCore.QRect(90, 30, 51, 16))
        self.rb_EOQ.setObjectName("rb_EOQ")
        self.groupInput = QtGui.QGroupBox(self)
        self.groupInput.setGeometry(QtCore.QRect(20, 140, 561, 270))
        self.groupInput.setObjectName("groupInput")
        self.label_2 = QtGui.QLabel(self.groupInput)
        self.label_2.setGeometry(QtCore.QRect(20, 32, 91, 16))
        self.label_2.setObjectName("label_2")
        self.label_3 = QtGui.QLabel(self.groupInput)
        self.label_3.setGeometry(QtCore.QRect(20, 62, 141, 16))
        self.label_3.setObjectName("label_3")
        self.label_4 = QtGui.QLabel(self.groupInput)
        self.label_4.setGeometry(QtCore.QRect(20, 92, 141, 16))
        self.label_4.setObjectName("label_4")
        self.label_5 = QtGui.QLabel(self.groupInput)
        self.label_5.setGeometry(QtCore.QRect(20, 122, 141, 16))
        self.label_5.setObjectName("label_5")
        self.label_6 = QtGui.QLabel(self.groupInput)
        self.label_6.setGeometry(QtCore.QRect(20, 152, 141, 16))
        self.label_6.setObjectName("label_6")
        self.label_8 = QtGui.QLabel(self.groupInput)
        self.label_8.setGeometry(QtCore.QRect(400, 30, 141, 16))
        self.label_8.setObjectName("label_8")
        self.label_9 = QtGui.QLabel(self.groupInput)
        self.label_9.setGeometry(QtCore.QRect(400, 63, 141, 16))
        self.label_9.setObjectName("label_9")
        self.label_10 = QtGui.QLabel(self.groupInput)
        self.label_10.setGeometry(QtCore.QRect(400, 94, 141, 16))
        self.label_10.setObjectName("label_10")
        self.label_11 = QtGui.QLabel(self.groupInput)
        self.label_11.setGeometry(QtCore.QRect(400, 123, 141, 16))
        self.label_11.setObjectName("label_11")
        self.label_12 = QtGui.QLabel(self.groupInput)
        self.label_12.setGeometry(QtCore.QRect(400, 153, 141, 16))
        self.label_12.setObjectName("label_12")
        
        self.edit_C = QtGui.QLineEdit(self.groupInput)
        self.edit_C.setGeometry(QtCore.QRect(130, 30, 261, 21))
        self.edit_C.setObjectName("edit_C")
        self.edit_C.setAlignment(QtCore.Qt.AlignRight)
        self.edit_H = QtGui.QLineEdit(self.groupInput)
        self.edit_H.setGeometry(QtCore.QRect(130, 60, 261, 21))
        self.edit_H.setObjectName("edit_H")
        self.edit_H.setAlignment(QtCore.Qt.AlignRight)
        self.edit_A = QtGui.QLineEdit(self.groupInput)
        self.edit_A.setGeometry(QtCore.QRect(130, 90, 261, 21))
        self.edit_A.setObjectName("edit_A")
        self.edit_A.setAlignment(QtCore.Qt.AlignRight)
        self.edit_TD = QtGui.QLineEdit(self.groupInput)
        self.edit_TD.setGeometry(QtCore.QRect(130, 120, 261, 21))
        self.edit_TD.setObjectName("edit_TD")
        self.edit_TD.setAlignment(QtCore.Qt.AlignRight)
        #self.edit_D = QtGui.QLineEdit(self.groupInput)
        #self.edit_D.setGeometry(QtCore.QRect(130, 150, 261, 21))
        #self.edit_D.setObjectName("edit_D")

        
        #self.label_13 = QtGui.QLabel(self.groupInput)
        #self.label_13.setGeometry(QtCore.QRect(20, 220, 81, 21))
        #self.label_13.setObjectName("label_13")

        #pixmap = QPixmap('Penguins.jpg')
        #self.label_13.setPixmap(pixmap)

        self.edit_D_ = QtGui.QLineEdit(self.groupInput)
        self.edit_D_.setGeometry(QtCore.QRect(50, 220, 81, 21))
        self.edit_D_.setObjectName("edit_D_")
        self.edit_D_.setAlignment(QtCore.Qt.AlignRight)
        self.edit_aD_2 = QtGui.QLineEdit(self.groupInput)
        self.edit_aD_2.setGeometry(QtCore.QRect(180, 220, 81, 21))
        self.edit_aD_2.setObjectName("edit_aD_2")
        self.edit_aD_2.setAlignment(QtCore.Qt.AlignRight)
        self.edit_L_ = QtGui.QLineEdit(self.groupInput)
        self.edit_L_.setGeometry(QtCore.QRect(310, 220, 81, 21))
        self.edit_L_.setObjectName("edit_L_")
        self.edit_L_.setAlignment(QtCore.Qt.AlignRight)
        self.edit_aL_2 = QtGui.QLineEdit(self.groupInput)
        self.edit_aL_2.setGeometry(QtCore.QRect(440, 220, 81, 21))
        self.edit_aL_2.setObjectName("edit_aL_2")
        self.edit_aL_2.setAlignment(QtCore.Qt.AlignRight)
        
        self.groupShortage = QtGui.QGroupBox(self)
        self.groupShortage.setGeometry(QtCore.QRect(180, 50, 181, 71))
        self.groupShortage.setObjectName("groupShortage")
        self.rb_unknown = QtGui.QRadioButton(self.groupShortage)
        self.rb_unknown.setGeometry(QtCore.QRect(20, 30, 101, 16))
        self.rb_unknown.setObjectName("rb_unknown")
        self.rb_known = QtGui.QRadioButton(self.groupShortage)
        self.rb_known.setGeometry(QtCore.QRect(110, 30, 61, 16))
        self.rb_known.setObjectName("rb_known")
        self.groupFunction = QtGui.QGroupBox(self)
        self.groupFunction.setGeometry(QtCore.QRect(590, 50, 271, 311))
        self.groupFunction.setObjectName("groupFunction")
        self.btn_Model = QtGui.QPushButton(self.groupFunction)
        self.btn_Model.setGeometry(QtCore.QRect(30, 30, 221, 41))
        self.btn_Model.setObjectName("btn_Model")
        self.btn_Optimization = QtGui.QPushButton(self.groupFunction)
        self.btn_Optimization.setGeometry(QtCore.QRect(30, 100, 221, 41))
        self.btn_Optimization.setObjectName("btn_Optimization")
        self.btn_Clear = QtGui.QPushButton(self.groupFunction)
        self.btn_Clear.setGeometry(QtCore.QRect(30, 170, 221, 41))
        self.btn_Clear.setObjectName("btn_Clear")
        self.btn_Close = QtGui.QPushButton(self.groupFunction)
        self.btn_Close.setGeometry(QtCore.QRect(30, 240, 221, 41))
        self.btn_Close.setObjectName("btn_Close")
        self.groupOutput = QtGui.QGroupBox(self)
        self.groupOutput.setGeometry(QtCore.QRect(20, 420, 831, 151))
        self.groupOutput.setObjectName("groupOutput")
        self.browser_output = QtGui.QTextBrowser(self.groupOutput)
        self.browser_output.setGeometry(QtCore.QRect(10, 20, 811, 121))
        self.browser_output.setObjectName("browser_output")
        self.groupShortage_2 = QtGui.QGroupBox(self)
        self.groupShortage_2.setGeometry(QtCore.QRect(370, 50, 211, 71))
        self.groupShortage_2.setObjectName("groupShortage_2")
        self.rb_time = QtGui.QRadioButton(self.groupShortage_2)
        self.rb_time.setGeometry(QtCore.QRect(20, 30, 101, 16))
        self.rb_time.setObjectName("rb_time")
        self.rb_demand = QtGui.QRadioButton(self.groupShortage_2)
        self.rb_demand.setGeometry(QtCore.QRect(110, 30, 101, 16))
        self.rb_demand.setObjectName("rb_demand")


        #connect control with function
        self.rb_demand.toggled.connect(self.showDemand)
        self.rb_known.toggled.connect(self.showknown)
        self.btn_Optimization.clicked.connect(self.optimization)
        self.btn_Clear.clicked.connect(self.clear)
        self.btn_Close.clicked.connect(self.close)


        self.retranslateUi()
        #QtCore.QMetaObject.connectSlotsByName(Form)

    def retranslateUi(self):

        self.label_Model.setText("Probabilistic Model")
        self.groupModel.setTitle("Model")
        self.rb_EOI.setText("EOI")
        self.rb_EOQ.setText("EOQ")
        self.groupInput.setTitle("Input")
        self.label_2.setText("Item cost(C)")
        self.label_3.setText("Holding cost(H):")
        self.label_4.setText("Order cost(A):")
        self.label_5.setText("% of Time:")
        #self.label_6.setText("% of Demand:")
        self.label_8.setText("$ unit")
        self.label_9.setText("$ / item year")
        self.label_10.setText("$ / order")
        self.label_11.setText("%")
        #self.label_12.setText("%")
        self.groupShortage.setTitle("Shortage")
        self.rb_unknown.setText("unknown")
        self.rb_known.setText("known")
        self.groupFunction.setTitle("Function")
        self.btn_Model.setText("Deterministic Model")
        self.btn_Optimization.setText("Optimization")
        self.btn_Clear.setText("Clear")
        self.btn_Close.setText("Exit")
        self.groupOutput.setTitle("Output")
        self.groupShortage_2.setTitle("Time / Demand")
        self.rb_time.setText("% of Time")
        self.rb_demand.setText("% of Demand")
    
    def optimization(self):
        self.browser_output.clear()

    def clear(self):
        self.edit_A.clear()
        self.edit_C.clear()
        self.edit_H.clear()
        self.edit_TD.clear()
        self.edit_D_.clear()
        self.edit_ad_2.clear()
        self.edit_L_.clear()
        self.edit_aL_2.clear()
        self.browser_output.clear()

    def close(self):
        sys.exit()

    def phi(x):
        #Cumulative distribution function for the standard normal distribution
        return (1.0 + math.erf(x / math.sqrt(2.0))) / 2.0

    def showDemand(self, value):
        if self.rb_known.isChecked():
            if value:
                self.label_5.setText("Lostsale cost:")
            else:
                self.label_5.setText("Backorder cost:")
        else:
            if value:
                self.label_5.setText("% of Demand:")
            else:
                self.label_5.setText("% of Time:")

    def showknown(self, value):
        if value:
            self.rb_time.setText("Back Order")
            self.rb_demand.setText("Lost Sale")
            self.label_11.setText("$ / Unit")

            if self.rb_demand.isChecked():
                self.label_5.setText("Lostsale cost:")
            else:
                self.label_5.setText("Backorder cost:")
        else:
            self.rb_time.setText("% of Time")
            self.rb_demand.setText("% of Demand")
            self.label_11.setText("%")

            if self.rb_demand.isChecked():
                self.label_5.setText("% of Demand:")
            else:
                self.label_5.setText("% of Time:")