
import sip
import sys
import math

from PyQt4 import QtGui, QtCore, QtGui
from PyQt4.QtCore import QTimeLine
from PyQt4.QtGui import *

from probabilistic import Probabilistic
from deterministic import Deterministic

class FaderWidget(QWidget):

    def __init__(self, old_widget, new_widget):

        QWidget.__init__(self, new_widget)

        self.old_pixmap = QPixmap(new_widget.size())
        old_widget.render(self.old_pixmap)
        self.pixmap_opacity = 1.0

        self.timeline = QTimeLine()
        self.timeline.valueChanged.connect(self.animate)
        self.timeline.finished.connect(self.close)
        self.timeline.setDuration(333)
        self.timeline.start()

        self.resize(new_widget.size())
        self.show()

    def paintEvent(self, event):

        painter = QPainter()
        painter.begin(self)
        painter.setOpacity(self.pixmap_opacity)
        painter.drawPixmap(0, 0, self.old_pixmap)
        painter.end()

    def animate(self, value):

        self.pixmap_opacity = 1.0 - value
        self.repaint()

class StackedWidget(QStackedWidget):

    def __init__(self, parent = None):
        QStackedWidget.__init__(self, parent)

    def setCurrentIndex(self, index):
        self.fader_widget = FaderWidget(self.currentWidget(), self.widget(index))
        QStackedWidget.setCurrentIndex(self, index)

    def setPage1(self):
        self.setCurrentIndex(0)

    def setPage2(self):
        self.setCurrentIndex(1)

def main():
	app = QApplication(sys.argv)
	window = QWidget()
	window.resize(878, 544)
	widget1 = Deterministic()
	widget2 = Probabilistic()

	stack = StackedWidget()
	stack.addWidget(widget1)
	stack.addWidget(widget2)

	widget1.btn_Model.clicked.connect(stack.setPage2)
	widget2.btn_Model.clicked.connect(stack.setPage1)

	layout = QGridLayout(window)
	layout.addWidget(stack, 0, 0, 1, 2)

	window.show()

	sys.exit(app.exec_())

if __name__ == '__main__':
	main()